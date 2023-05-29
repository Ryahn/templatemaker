<?php

namespace App\Models;

use http\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Template extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Set the languages
     *
     */
    public function setLangaugeAttribute($value)
    {
        if (!$value) $this->attributes['langauge'] = null;
        $this->attributes['langauge'] = implode(', ', $value);
    }


    /**
     * Set the languages
     *
     */
    public function setGenreAttribute($value)
    {
        if (!$value) $this->attributes['genre'] = null;
        $this->attributes['genre'] = implode(', ', $value);
    }

    /**
     * Set the languages
     *
     */
    public function setOsSysAttribute($value)
    {
        if (!$value) $this->attributes['osSys'] = null;
        $this->attributes['osSys'] = implode(', ', $value);
    }

    /**
     * Set the languages
     *
     */
    public function setVoicedAttribute($value)
    {
        if (!$value) $this->attributes['voiced'] = null;
        $this->attributes['voiced'] = implode(', ', $value);
    }

    /**
     * Set the languages
     *
     */
    public function setCompatibleAttribute($value)
    {
        if (!$value) $this->attributes['compatible'] = null;
        $this->attributes['compatible'] = implode(', ', $value);
    }

    public function getCensorshipAttribute($value)
    {
        switch ($this->attributes['censorship']) {
            case '1':
                return 'Yes - Mosaics';
                break;
            case '2':
                return 'Yes - Patch w/ Mosaics';
                break;
            case '3':
                return 'Yes - Patch w/o Mosaics';
                break;
            case '4':
                return 'No';
                break;
            case '5':
                return 'No Sexual Content';
                break;
            default:
                return 'Invalid option given on censorship';
        }
    }

    public function getUserThanksAttribute($value)
    {
        if (!$value) return null;
        $parts = explode('/', $value);
        $user = explode('.', $parts[4]);
        return "[user=$user[1]]$user[0][/user]";
    }

    public function getPrequelAttribute($value)
    {
        if (!$value) return null;
        $url = explode('/', $value);
        $parts = explode('-', $url[4]);
        unset($parts[array_key_last($parts)]);
        $name = ucwords(implode(' ', $parts));
        return "[url=". $value ."]" . $name ."[/url]";
    }
    public function getSequelAttribute($value)
    {
        if (!$value) return null;
        $url = explode('/', $value);
        $parts = explode('-', $url[4]);
        unset($parts[array_key_last($parts)]);
        $name = ucwords(implode(' ', $parts));
        return "[url=". $value ."]" . $name ."[/url]";
    }

    private function getVn($value) {
        // if (!($id == NULL)) return null;
        $curl = curl_init();
        $id = explode('v',$value)[2];

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.vndb.org/kana/vn",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\n  \"filters\": [\"id\", \"=\", \"v$id\"],\n  \"fields\": \"id, titles.title,titles.latin,titles.main, aliases, title, length,length_minutes, released, devstatus\",\n  \"sort\": \"id\",\n  \"reverse\": false,\n  \"results\": 10,\n  \"page\": 1\n}",
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Authorization: Token  ryto-br4et-kjork-o7da-nyee4-4bmta-911c",
            "Content-Type: application/json",
            "User-Agent: Thunder Client (https://www.thunderclient.com)"
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $data = json_decode($response, true);
        if(empty($data['results'])) return null;
        return $data;
    }

    public function setOriginalTitleAttribute($value) {
        $this->attributes['originalTitle'] = $this->getVnTitle();
    }

    public function setLengthAttribute($value)
    {
        $this->attributes['length'] = $this->getVnLength();
    }

    public function getVnTitle()
    {
        $data = $this->getVn($this->vndb);
        if(!$data) return null;
        return $data['results'][0]['titles'][0]['title'];
    }
    public function getVnLength()
    {
        $data = $this->getVn($this->vndb);
        if (!$data) return null;
        $l = $data['results'][0]['length'];
        $length = "";
        switch($l) {
            case 1:
                $length = 'Very short (< 2hours)';
                break;
            case 2:
                $length = 'Short (2 - 10 hours)';
                break;
            case 3:
                $length = 'Medium (10 - 30 hours)';
                break;
            case 4:
                $length = 'Long (30 - 50 hours)';
                break;
            case 5:
                $length = 'Very long (> 50 hours)';
                break;
            default:
                $length = null;
        }
        return $length;
    }

    public function getVnLatin()
    {
        $data = $this->getVn($this->vndb);
        if (!$data) return null;
        return $data['results'][0]['titles'][0]['latin'];
    }

}
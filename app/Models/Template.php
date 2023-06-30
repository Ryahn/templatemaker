<?php

namespace App\Models;

use http\Client;
use App\Models\BBCode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Template extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function bbcode(): HasOne
    {
        return $this->hasOne(BBCode::class);
    }

    /**
     * Set the languages
     *
     */
    public function getLangaugeAttribute($value)
    {
        if (!$value) return null;
        return implode(', ', json_decode($value, true));
    }

    public function setLangaugeAttribute($value)
    {
        if (!$value) return $this->attributes['langauge'] = null;
        return $this->attributes['langauge'] = json_encode($value);
    }


    /**
     * Set the languages
     *
     */
    public function getGenreAttribute($value)
    {
        if (!$value) return null;
        return implode(', ', json_decode($value, true));
    }

    public function setGenreAttribute($value)
    {
        if (!$value) return $this->attributes['genre'] = null;
        return $this->attributes['genre'] = json_encode($value);
    }

    /**
     * Set the languages
     *
     */
    public function getOsSysAttribute($value)
    {
        if (!$value) return null;
        // $value = json_decode($value, true);
        return implode(', ', json_decode($value, true));
    }

    public function setOsSysAttribute($value)
    {
        if (!$value) return $this->attributes['osSys'] = null;
        return $this->attributes['osSys'] = json_encode($value);
    }

    /**
     * Set the languages
     *
     */
    public function getVoicedAttribute($value)
    {
        if (!$value) return null;
        // $value = json_decode($value, true);
        return implode(', ', json_decode($value, true));
    }

    public function setVoicedAttribute($value)
    {
        if (!$value) return $this->attributes['voiced'] = null;
        return $this->attributes['voiced'] = json_encode($value);
    }

    /**
     * Set the languages
     *
     */
    public function getCompatibleAttribute($value)
    {
        if (!$value) return null;
        // $value = json_decode($value, true);
        return implode(', ', json_decode($value, true));
    }

    public function setCompatibleAttribute($value)
    {
        if (!$value) return $this->attributes['compatible'] = null;
        return $this->attributes['compatible'] = json_encode($value);
    }

    public function setCensorshipAttribute($value)
    {
        if (!$value) return $this->attributes['censorship'] = null;
        $this->attributes['censorship'] = $value;
    }
    public function getCensorshipAttribute($value)
    {
        switch ($value) {
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

    function setUserThanksAttribute($value) {
        if (!$value) return $this->attributes['userThanks'] = null;
        if (filter_var($value, FILTER_VALIDATE_URL)) return $this->attributes['userThanks'] = $value;
        $parts = explode(']', $value);
        $id = explode('=', $parts[0])[1];
        $user = explode('[', $parts[1])[0];
        $this->attributes['userThanks'] = "https://f95zone.to/members/$user.$id";
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
    public function setPrequelAttribute($value)
    {
        if (!$value) return $this->attributes['prequel'] = null;
        if (filter_var($value, FILTER_VALIDATE_URL)) return $this->attributes['prequel'] = $value;
        $parts = explode('/', $value);
        $url = explode(']', $parts[4])[0];
        return $this->attributes['prequel'] = "https://f95zone.to/threads/$url";
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

    public function setSequelAttribute($value)
    {
        if (!$value) return $this->attributes['sequel'] = null;
        if (filter_var($value, FILTER_VALIDATE_URL)) return $this->attributes['sequel'] = $value;
        $parts = explode('/', $value);
        $url = explode(']', $parts[4])[0];
        return $this->attributes['sequel'] = "https://f95zone.to/threads/$url";
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

    public function getTrailerAttribute($value)
    {
        if (!$value) return null;
        $parts = explode('/', $value);

        $key = "";
        $bbcode = "";

        if (in_array('imgur.com', $parts)) {
            $key = array_search('imgur.com', $parts);
            $bbcode = "[media=". explode(".", $parts[$key])[0] . "]". $parts[3] . "[/media]";
        } elseif (in_array('vimeo.com', $parts)) {
            $key = array_search('vimeo.com', $parts);
            $bbcode = "[media=". explode(".", $parts[$key])[0] . "]". explode('?', $parts[3])[0] . "[/media]";
        } elseif (in_array('drive.google.com', $parts)) {
            $key = array_search('drive.google.com', $parts);
            $bbcode = "[media=googledrive]". $parts[5] . "[/media]";
        } elseif (in_array('store.steampowered.com', $parts)) {
            $key = array_search('store.steampowered.com', $parts);
            $bbcode = "[media=steamstore]". $parts[4] . "[/media]";
        } elseif (in_array('www.youtube.com', $parts)) {
            $key = array_search('www.youtube.com', $parts);
            $bbcode = "[media=". explode(".", $parts[$key])[1] . "]". explode('=', $parts[3])[1] . "[/media]";
        } else {
            $bbcode = "[media=youtube]dQw4w9WgXcQ[/media]";
        }

        return $bbcode;
    }

    public function setTrailerAttribute($value)
    {
        if (!$value) return $this->attributes['trailer'] = null;
        if (filter_var($value, FILTER_VALIDATE_URL)) return $this->attributes['trailer'] = $value;
        $value = strtolower($value);
        $parts = explode('[media=', $value);
        $part1 = explode('[/media]', $parts[1]);
        $part2 = explode(']', $part1[0]);

        $url = "";
        if (in_array('youtube', $part2)) {
            $url = "https://www.youtube.com/watch?v=$part2[1]";
        } elseif (in_array('imgur', $part2)) {
            $url = "https://i.imgur.com/$part2[1].mp4";
        } elseif (in_array('vimeo', $part2)) {
            $url = "https://vimeo.com/$part2[1]";
        } elseif (in_array('steamstore', $part2)) {
            $url = "https://store.steampowered.com/app/$part2[1]";
        } elseif (in_array('googledrive', $part2)) {
            $url = "https://drive.google.com/file/d/$part2[1]/view";
        } else {
            $url = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
        }
        return $this->attributes['trailer'] = $url;
    }

    public function getDevLinksAttribute($value)
    {
        if (!$value) return null;
        $parts = explode(',', $value);
        $devLinks = [];
        foreach ($parts as $part) {
            $link = explode('|',$part);
            $url = "[url=". $link[1] . "]" . $link[0] . "[/url]";
            $devLinks[] = $url;
        }
        return implode(' - ', $devLinks);
    }

    public function setDevLinksAttribute($value)
    {
        if (!$value) return $this->attributes['devLinks'] = null;
        $parts = explode(' - ', $value);
        $part1 = explode('[url=', $parts[0])[1];
        $part2 = explode(']', $part1);
        $part3 = explode('[', $part2[1]);

        return $this->attributes['devLinks'] = "$part3[0]|$part2[0]";
    }

    public function getLinkAssetAttribute($value)
    {
        if (!$value) return null;
        $parts = explode(',', $value);
        $linkAssets = [];
        foreach ($parts as $part) {
            $link = explode('|',$part);
            $url = "[url=". $link[1] . "]" . $link[0] . "[/url]";
            $linkAssets[] = $url;
        }
        return implode(' - ', $linkAssets);
    }

    public function setLinkAssetAttribute($value)
    {
        if (!$value) return $this->attributes['linkAsset'] = null;
        $parts = explode(' - ', $value);
        $part1 = explode('[url=', $parts[0])[1];
        $part2 = explode(']', $part1);
        $part3 = explode('[', $part2[1]);

        return $this->attributes['linkAsset'] = "$part3[0]|$part2[0]";
    }

}

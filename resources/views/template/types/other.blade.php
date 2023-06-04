@php 
if (!($template->osSys == NULL)) {
    $oses = explode(', ', $template->osSys);
}
    $type = $template->type;
@endphp
[CENTER](Cover Art)

[B]Overview[/B]:
{{ $template->overview }}@if (!($template->trailer == NULL))[spoiler="Trailer"]{{ $template->trailer }}[/spoiler] @endif[/CENTER]

[B]Release Date[/B]: {{ $template->release_date }}
@if (!($template->thread_updated == NULL))[B]Updated[/B]: {{ $template->thread_updated }} @endif
[B]Artist/Developer[/B]: {{ $template->devName }} @if (!($template->devLinks == NULL)){{ $template->devLinks }} @endif
[B]Censorship[/B]: {{ $template->censorship }}
[B]Language[/B]: {{ $template->language }}
[B]OS[/B]: {{ $template->osSys }}
@if (!($template->originalTitle == NULL))[B]Original Title[/B]: {{ $template->originalTitle }} @endif

@if (!($template->voiced == NULL))[B]Voices[/B]: {{ $template->voiced }} @endif

@if (!($template->vndb == NULL))[B]VNDB[/B]: [url={{ $template->vndb }}]{{ $template->getVnLatin() }}[/url] @endif

@if (!($template->prequel == NULL))[B]Prequel[/B]: {{ $template->prequel }} @endif

@if (!($template->sequel == NULL))[B]Sequel[/B]: {{ $template->sequel }} @endif

@if (!($template->pages == NULL))[B]Pages[/B]: {{ $template->pages }} @endif

@if (!($template->resolution == NULL))[B]Resolution[/B]: {{ $template->resolution }} @endif

[B]Genre[/B]:
[SPOILER]
{{ $template->genre }}
[/SPOILER]

[B]Installation[/B]:
[SPOILER]
{{ $template->installation }}
[/SPOILER]

[B]Changelog[/B]:
[SPOILER]
{{ $template->changelog }}
[/SPOILER]

[CENTER][SIZE=6][B]Download[/B]:[/SIZE]
[SIZE=5]LINK - LINK - LINK[/SIZE]

[SPOILER="Individual"]
[SIZE=5]LINK - LINK - LINK[/SIZE][/SPOILER]

[CENTER][SIZE=6][B]Download[/B]:[/SIZE]
[SIZE=5]@foreach ($oses as $os)
{!! nl2br("[B]". $os ."[/B]: LINK - LINK - LINK") !!}
@endforeach[/SIZE]
@if (!($template->userThanks == NULL))[SIZE=2]Thanks for the share {{ $template->userThanks }}[/SIZE]@endif

(Samples/Screenshoots)[/CENTER]
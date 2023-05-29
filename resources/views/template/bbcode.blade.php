[CENTER](Cover Art)

[B]Overview[/B]:
{{ $template->overview }} @if (!($template->trailer == NULL))[spoiler="Trailer"]{{ $template->trailer }}[/spoiler] @endif[/CENTER]

[B]Release Date[/B]: {{ $template->release_date }}
[B]Updated[/B]: {{ $template->thread_updated }}
@if ($template->type == 'game' || $template->type == 'collection' || $template->type == 'other')
[B]Developer[/B]: {{ $template->devName }}
[B]Censorship[/B]: {{ $template->censorship }}
[B]Language[/B]: {{ $template->language }}
[B]OS[/B]: {{ $template->osSys }}
@if (!($template->originalTitle == NULL))[B]Original Title[/B]: {{ $template->originalTitle }} @endif

@if (!($template->voiced == NULL))[B]Voices[/B]: {{ $template->voiced }} @endif

@if (!($template->vndb == NULL))[B]VNDB[/B]: [url={{ $template->vndb }}]{{ $template->getVnLatin() }}[/url] @endif

@endif
@if ($template->type != 'game')
[B]Artist[/B]: {{ $template->devName }}
[B]Resolution[/B]: {{ $template->resolution }}
[B]Pages[/B]: {{ $template->pages }}
[B]Content[/B]: {{ $template->content }}
@endif
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
@php 
$oses = explode(', ', $template->osSys);
@endphp
@if ($template->type != 'game')
[CENTER][SIZE=5][B]Collection List Download[/B]:
[/SIZE]
[SIZE=5][B]Download[/B]: LINK - LINK - LINK
[/SIZE]
@else
[CENTER][SIZE=6][B]Download[/B]:[/SIZE]
[SIZE=5]
@foreach ($oses as $os)
{!! nl2br("[B]". $os ."[/B]: LINK - LINK - LINK") !!}
@endforeach
[/SIZE]
@endif

(Samples/Screenshoots)[/CENTER]
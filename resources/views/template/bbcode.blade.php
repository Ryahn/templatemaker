@php 
$oses = explode(', ', $template->osSys);
$type = $template->type;
@endphp
[CENTER](Cover Art)

[B]Overview[/B]:
{{ $template->overview }} @if (!($template->trailer == NULL))[spoiler="Trailer"]{{ $template->trailer }}[/spoiler] @endif[/CENTER]

@if ($type != 'asset')
[B]Release Date[/B]: {{ $template->release_date }}
[B]Updated[/B]: {{ $template->thread_updated }}@else[B]Release Date[/B]: {{ $template->release_date }}@endif
@if ($type == 'game' || $type == 'collection' || $type == 'other')
[B]Developer[/B]: {{ $template->devName }} @if (!($template->devLinks == NULL)){{ $template->devLinks }} @endif
[B]Censorship[/B]: {{ $template->censorship }}
[B]Language[/B]: {{ $template->language }}
[B]OS[/B]: {{ $template->osSys }}
@if (!($template->originalTitle == NULL))[B]Original Title[/B]: {{ $template->originalTitle }} @endif

@if (!($template->voiced == NULL))[B]Voices[/B]: {{ $template->voiced }} @endif

@if (!($template->vndb == NULL))[B]VNDB[/B]: [url={{ $template->vndb }}]{{ $template->getVnLatin() }}[/url] @endif

@if (!($template->prequel == NULL))[B]Prequel[/B]: {{ $template->prequel }} @endif

@if (!($template->sequel == NULL))[B]Sequel[/B]: {{ $template->sequel }} @endif


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

@if ($type == 'collection' || $type == 'other')
[B]Content List[/B]
[SPOILER]
CONTENT LIST
[/SPOILER]

[CENTER][SIZE=6][B]Download[/B]:[/SIZE]
[SIZE=5]LINK - LINK - LINK[/SIZE]
[SPOILER="Individual"]
[SIZE=5]LINK - LINK - LINK[/SIZE][/SPOILER]
@if (!($template->userThanks == NULL))[SIZE=2]Thanks for the share {{ $template->userThanks }}[/SIZE]@endif
@else
[CENTER][SIZE=6][B]Download[/B]:[/SIZE]
[SIZE=5]
@foreach ($oses as $os)
{!! nl2br("[B]". $os ."[/B]: LINK - LINK - LINK") !!}
@endforeach
[/SIZE]
@if (!($template->userThanks == NULL))[SIZE=2]Thanks for the share {{ $template->userThanks }}[/SIZE]@endif
@endif
@else {{-- END GAME, COLLLECTION, OTHER --}}
[B]Artist[/B]: {{ $template->devName }} @if (!($template->devLinks == NULL)){{ $template->devLinks }}@endif
@if ($type != 'asset')[B]Censorship[/B]: {{ $template->censorship }}
[B]Language[/B]: {{ $template->language }}
[B]Pages[/B]:
[B]Resolution[/B]:

[B]Genre[/B]:
[SPOILER]
{{ $template->genre }}
[/SPOILER]

[B]Installation[/B]:
[SPOILER]
{{ $template->installation }}
[/SPOILER]
@endif
@if ($type == 'asset')[B]Asset[/B]: {{ $template->linkAsset }}
[B]Compatible Software[/B]: {{ $template->compatible }} 
[B]Included List[/B]: 
[SPOILER]
{{ $template->included }}[/SPOILER]
@endif

[CENTER][SIZE=6][B]Download[/B]:[/SIZE]
[SIZE=5]LINK - LINK - LINK[/SIZE]
@if (!($template->userThanks == NULL))[SIZE=2]Thanks for the share {{ $template->userThanks }}[/SIZE]@endif

@endif

(Samples/Screenshoots)[/CENTER]
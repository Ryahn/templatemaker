@php 
$type = $template->type;
@endphp
[CENTER](Cover Art)

[B]Overview[/B]:
{{ $template->overview }}[/CENTER]

[B]Release Date[/B]: {{ $template->release_date }}
[B]Asset[/B]: {{ $template->linkAsset }}
[B]Compatible Software[/B]: {{ $template->compatible }} 
[B]Included List[/B]: 
[SPOILER]
{{ $template->included }}[/SPOILER]

[CENTER][SIZE=6][B]Download[/B]:[/SIZE]
[SIZE=5]LINK - LINK - LINK[/SIZE]
@if (!($template->userThanks == NULL))[SIZE=2]Thanks for the share {{ $template->userThanks }}[/SIZE]@endif

(Samples/Screenshoots)[/CENTER]
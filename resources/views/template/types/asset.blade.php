[CENTER](Cover Art)

[B]Overview[/B]:
{!! $template->overview !!}[/CENTER]

[B]Artist/Developer[/B]: {{ $template->devName }}  @if (!($template->devLinks == NULL)){{ $template->devLinks }} @endif
[B]Link To Asset[/B]: {{ $template->linkAsset }}
[B]Compatible Software[/B]: {{ $template->compatible }} 
[B]Included Models/Assets[/B]: 
[SPOILER]
{{ $template->included }}[/SPOILER]

[CENTER][SIZE=6][B]Download[/B]:[/SIZE]
[SIZE=5]LINK - LINK - LINK[/SIZE]
@if (!($template->userThanks == NULL))[SIZE=2]Thanks for the share {{ $template->userThanks }}[/SIZE]@endif

(Samples/Screenshots)[/CENTER]
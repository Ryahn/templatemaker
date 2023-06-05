[CENTER](Cover Art)

[SIZE=5][B]Overview[/B][/SIZE]
{!! $template->overview !!}[/CENTER]

[SIZE=4][B]Artist/Developer[/B][/SIZE]: {{ $template->devName }}  @if (!($template->devLinks == NULL)){{ $template->devLinks }} @endif
[SIZE=4][B]Link To Asset[/B][/SIZE]: {{ $template->linkAsset }}
[SIZE=4][B]Compatible Software[/B][/SIZE]: {{ $template->compatible }} 
[SIZE=4][B]Included Models/Assets[/B][/SIZE]: 
[SPOILER]
{{ $template->included }}[/SPOILER]

[CENTER][SIZE=5][B]Download[/B]:[/SIZE]
[SIZE=6]LINK - LINK - LINK[/SIZE]
@if (!($template->userThanks == NULL))[SIZE=2]Thanks for the share {{ $template->userThanks }}[/SIZE]@endif

(Samples/Screenshots)[/CENTER]
<?php
$items = getGoogleItems('calendar');
printMenuAndRender($items, '<iframe src="https://calendar.google.com/calendar/embed?src=%google-id%&ctz=Asia%2FKolkata" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>');

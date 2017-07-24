<?php

    return [
        'calendarContainer' => '<div id="{{calendar_id}}" class="ui calendar{{required}}"{{required}}>{{content}}</div>',
        'calendarContainerError' => '<div id="{{calendar_id}}" class="ui calendar {{type}}{{required}} error">{{content}}{{error}}</div>',
        'calendar' => '<div class="ui input left icon"><i class="calendar icon"></i><input type="text" name="{{name}}"{{attrs}}/></div>'
    ];

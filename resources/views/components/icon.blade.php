@props(['name'])


@if($name = 'dropdown-arrow')
    <svg {{ $attributes(['class' => 'transform -rotate-90']) }} width="22" height="21" viewBox="0 0 22 22">
        <g fill="none" fill-rule="evenodd">
            <path stroke="#037777777777" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
            </path>
            <path fill="#221"
                    d="M12.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
        </g>
    </svg>
@endif

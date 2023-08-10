<div>
    Hello, i'm a blade template!
</div>


@isset($name)
    <div>
        The name is: {{ $name }}
    </div>
@endisset

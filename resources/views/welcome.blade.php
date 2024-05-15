<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <h1>Exemple form Larastrap</h1>
            <x-larastrap::form method="POST" action="{{route('home')}}">
                <h2>Fields</h2>
                <x-larastrap::check name="check" label="Check" />
                <x-larastrap::color name="color" label="Color" />
                <x-larastrap::date name="date" label="Date" />
                <x-larastrap::datetime name="datetime" label="Datetime" />
                <x-larastrap::email name="email" label="Email" />
                <x-larastrap::file name="file" label="File" />
                <x-larastrap::month name="month" label="Month" />
                <x-larastrap::number name="number" label="Number" />
                <x-larastrap::password name="password" label="Password" />
                <x-larastrap::radios name="radios" label="Radios" :options="['1' => 'Option 1', '2' => 'Option 2']" />
                <x-larastrap::range name="range" label="Range" />
                <x-larastrap::select name="select" label="Select" :options="['' => 'Make a choice', '1' => 'Option 1', '2' => 'Option 2']" />
                <x-larastrap::select name="select_multiple" label="Select multiple" :options="['1' => 'Option 1', '2' => 'Option 2']" multiple />
                <x-larastrap::search name="search" label="Search" />
                <x-larastrap::tel name="tel" label="Tel" />
                <x-larastrap::text name="text" label="Text" />
                <x-larastrap::textarea name="textarea" label="Textarea" />
                <x-larastrap::time name="time" label="Time" />
                <x-larastrap::url name="url" label="Url" />
                <x-larastrap::week name="week" label="Week" />

                <h2>Field array [dot] (root -> child -> NAME)</h2>
                <x-larastrap::check name="root.child.check" label="Check" />
                <x-larastrap::color name="root.child.color" label="Color" />
                <x-larastrap::date name="root.child.date" label="Date" />
                <x-larastrap::datetime name="root.child.datetime" label="Datetime" />
                <x-larastrap::email name="root.child.email" label="Email" />
                <x-larastrap::file name="root.child.file" label="File" />
                <x-larastrap::month name="root.child.month" label="Month" />
                <x-larastrap::number name="root.child.number" label="Number" />
                <x-larastrap::password name="root.child.password" label="Password" />
                <x-larastrap::radios name="root.child.radios" label="Radios" :options="['1' => 'Option 1', '2' => 'Option 2']" />
                <x-larastrap::range name="root.child.range" label="Range" />
                <x-larastrap::select name="root.child.select" label="Select" :options="['' => 'Make a choice', '1' => 'Option 1', '2' => 'Option 2']" />
                <x-larastrap::select name="root.child.select_multiple" label="Select multiple" :options="['1' => 'Option 1', '2' => 'Option 2']" multiple />
                <x-larastrap::search name="root.child.search" label="Search" />
                <x-larastrap::tel name="root.child.tel" label="Tel" />
                <x-larastrap::text name="root.child.text" label="Text" />
                <x-larastrap::textarea name="root.child.textarea" label="Textarea" />
                <x-larastrap::time name="root.child.time" label="Time" />
                <x-larastrap::url name="root.child.url" label="Url" />
                <x-larastrap::week name="root.child.week" label="Week" />

                <h2>Field array [html] (root -> child -> NAME)</h2>
                <x-larastrap::check name="root_html[child][check]" label="Check" />
                <x-larastrap::color name="root_html[child][color]" label="Color" />
                <x-larastrap::date name="root_html[child][date]" label="Date" />
                <x-larastrap::datetime name="root_html[child][datetime]" label="Datetime" />
                <x-larastrap::email name="root_html[child][email]" label="Email" />
                <x-larastrap::file name="root_html[child][file]" label="File" />
                <x-larastrap::month name="root_html[child][month]" label="Month" />
                <x-larastrap::number name="root_html[child][number]" label="Number" />
                <x-larastrap::password name="root_html[child][password]" label="Password" />
                <x-larastrap::radios name="root_html[child][radios]" label="Radios" :options="['1' => 'Option 1', '2' => 'Option 2']" />
                <x-larastrap::range name="root_html[child][range]" label="Range" />
                <x-larastrap::select name="root_html[child][select]" label="Select" :options="['' => 'Make a choice', '1' => 'Option 1', '2' => 'Option 2']" />
                <x-larastrap::select name="root_html[child][select_multiple]" label="Select multiple" :options="['1' => 'Option 1', '2' => 'Option 2']" multiple />
                <x-larastrap::search name="root_html[child][search]" label="Search" />
                <x-larastrap::tel name="root_html[child][tel]" label="Tel" />
                <x-larastrap::text name="root_html[child][text]" label="Text" />
                <x-larastrap::textarea name="root_html[child][textarea]" label="Textarea" />
                <x-larastrap::time name="root_html[child][time]" label="Time" />
                <x-larastrap::url name="root_html[child][url]" label="Url" />
                <x-larastrap::week name="root_html[child][week]" label="Week" />

                <h2>Ridiculous field (root -> child1 -> child2 -> child3 -> child4 -> NAME)</h2>
                <x-larastrap::text name="root.child1.child2.child3.child4.text" label="Text" />
            </x-larastrap::form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>

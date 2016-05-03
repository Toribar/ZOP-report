<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="sr" xmlns="http://www.w3.org/1999/xhtml" lang="sr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>@yield('title')</title>
        <style type="text/css">{!! file_get_contents(public_path('styles/pdf.css')) !!}</style>
    </head>

    <body>
        {{--
        <div class="header">
            <table>
                <tr>
                    <td>@yield('title')</td>
                    <td style="text-align: right;">@yield('author')</td>
                </tr>
            </table>
        </div>
        --}}

        <div class="footer">
            <div class="page-number"></div>
        </div>

        @yield('content')
    </body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ $issue->name }} | Laravel 资讯</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
</head>
<body>
<div style="margin:0 auto">
        <div style="background-color:#f5f5f5;padding:20px 0">
            <div style="color:#333;margin:0 auto;padding:24px;max-width:700px;font-family:'Helvetica Neue',Helvetica,Arial,Sans-serif;font-size:13px;line-height:1.7;background-color:#fff">
                <p style="margin:0;color:#555;font-size:11px;line-height:20px;margin-bottom:18px;text-align:right">如果你无法正常浏览本邮件，请<a href="{{ route('issues.show', [$issue->id]) }}" style="color:#07c;text-decoration:none" target="_blank">点此查看</a></p>
                <h1 style="margin:0 0 6px 0;font-size:25px;font-weight:bold;letter-spacing:-1px">{{ $issue->name }}</h1>
                <p>Laravel 让创作更加自由</p>

                @if (count($posts['news_posts']) > 0)
                    @include('emails._issue_cell', ['section_title' => '最新资讯', 'posts' => $posts['news_posts'], 'category_id' => 1])
                @endif
                @if (count($posts['tutorials_posts']) > 0)
                    @include('emails._issue_cell', ['section_title' => '开发技巧', 'posts' => $posts['tutorials_posts'], 'category_id' => 2])
                @endif
                @if (count($posts['packages_posts']) > 0)
                    @include('emails._issue_cell', ['section_title' => '扩展推荐', 'posts' => $posts['packages_posts'], 'category_id' => 3])
                @endif
                @if (count($posts['meetup']) > 0)
                    @include('emails._issue_cell', ['section_title' => '线下聚会', 'posts' => $posts['meetup'], 'category_id' => 6])
                @endif
                @if (count($posts['resources_posts']) > 0)
                    @include('emails._issue_cell', ['section_title' => '资源推荐', 'posts' => $posts['resources_posts'], 'category_id' => 4, 'extra_class' => 'add-margin-bottom'])
                @endif
</div>
</div>
</div>
<table width="100%" cellspacing="0" cellpadding="10">
                                    <tr>
                                        <td align="Center" bgColor="#f1f1f1">
                                            <div>
                                                <div id="txtHolder-4" class="txtEditorClass" style="color: #5d5d5d; font-size: 11px; font-family: 'Arial';"><a href="https://laravel-china.org/">Laravel China 社区</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
</body>

</html>
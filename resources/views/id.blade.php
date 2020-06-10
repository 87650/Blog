<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css')}}/app.css" />
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('comments/css')}}/comments.css" />


    <script type="text/javascript" src="{{asset('js')}}/app.js" /></script>
    <script type="text/javascript" src="{{asset('comments/js')}}/comment-reply.js" /></script>
    <script type="text/javascript" src="{{asset('comments/js')}}/comment-scripts.js" /></script>

    </head>
    <body>
<li>
    <h3><a href='#'> {{$name}}</a></h3>
    <p><strong>{{$dats}}</strong>{{$Texts}}<a href='#'>More…</a></p>
    @isset($tests)
        <a href="{{"/form_/" . $value1->id}}">update</a>

        <?php
        echo Form::open(array('post' => 'app/Modell'));
        echo Form::text('name2', $user['name']);
        echo Form::text('email', $user['email']);
        echo Form::text('commen');
        echo Form::text('id_', $value1->id);
        echo Form::submit('Click Me!');
        echo Form::close();

        ?>
        @endisset


    @foreach($comments as $k => $comment)
    @if($comment->id_post == $value1->id)
        <h3><a href='#'> {{$comment->name}}</a></h3>
    <p>{{$comment->comments}}</p>
        @endif
    @endforeach

</li>
        </body>
        </html>



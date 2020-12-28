<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>

        <div class="container">
            <div class="row" id="app">
                <h1 class="text-center">Chat Room</h1>
                <div class="col-md-6 offset-md-3">
                    <li class="list-group-item active">Chat</li>
                    <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                    <ul class="list-group" style="cursor: pointer;overflow-y: scroll;height: 350px;" v-chat-scroll>
                        <message v-for="value,index in chat.message" :key="value.index" :color=chat.color[index] :time = chat.time[index] :user = chat.user[index]>@{{ value }}</message>
                    </ul>
                    <input type="text" class="form-control" placeholder="type your message" v-model="message" @keyup.enter="send">
                </div>
            </div>
        </div>


        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>

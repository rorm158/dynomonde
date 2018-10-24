﻿
< !DOCTYPE html >
    <html>
        <head>
            <meta charset="UTF-8" />
            <title>Chat jQuery</title>
            <style type="text/css">
                #conversation {
                    width: 300px;
                height: 400px;
                border: black 1px solid;
                background-color: #efecca;
                overflow-x: hidden;
                overflow-y: scroll;
                padding: 5px;
                margin-left: 10px;
            }
        
    fieldset {
                    width: 330px;
                background-color: #e6e2af;
                border: black 1px solid;
            }
</style>
        </head>

        <body>
            <fieldset>
                <legend>Un chat en jQuery</legend>
                <div id="conversation"></div>
                <br />
                <form action="#" method="post">
                    <input type="text" id="nom" value="pseudo" size="6" />
                    <input type="text" id="message" size="27" />
                    <button type="button" id="envoyer" title="Envoyer">
                        <img src="envoyer.gif" />
                    </button>
                </form>
            </fieldset>
            $(function() {
                afficheConversation();

            $('#envoyer').click(function() {
        var nom = $('#nom').val();
            var message = $('#message').val();
        $.post('chat.php', {
                'nom': nom,
            'message': message
        }, afficheConversation);
    });

    function afficheConversation() {
                $('#conversation').load('ac.htm');
            $('#message').val('');
            $('#message').focus();
          }
      
          setInterval(afficheConversation, 4000);
        });
</body>
    </html>

<!-- WHATSAPP -->
<div id='whatsapp-chat' class='hide'>
    <div class='header-chat'>
        <div class='head-home'>
            <h3>@lang('was sistemas web')</h3>
            <div class='info-avatar'><img
                    src='https://sistemadecotizaciones.files.wordpress.com/2020/08/supportmale.png' /></div>
        </div>
        <div class='get-new'>
            <div id='get-label'>@lang('was soporte')</div>
            <div id='get-nama'>@lang('was servicio')</div>
        </div>
    </div>

    <div class='start-chat'>
        <div class='first-msg'><span>@lang('was te ayudo')</span>
        </div>
        <div class='blanter-msg'><textarea id='chat-input' placeholder=@lang('mensaje') maxlength='120'
                row='1'></textarea>
            <a href='#' onclick="enviar_mensaje();" id='send-it'><i class="far fa-paper-plane"></i></a>
        </div>
    </div>
    <div id='get-number'>34662572560</div>
    <a class='close-chat' onclick="cerrar_chat();" href='#'>×</a>
</div>

<a class='blantershow-chat' onclick="mostrar_chat();" href='#' title='Show Chat'><svg width="20" viewBox="0 0 24 24">
        <defs />
        <path fill="#eceff1"
            d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z" />
        <path fill="#4caf50"
            d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z" />
        <path fill="#fafafa"
            d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z" />
    </svg>
    @lang('chat')</a>
</div>
<!-- !WHATSAPP -->

<script>
    function enviar_mensaje() {
        var a = document.getElementById("chat-input");
        if ("" != a.value) {
            var b = document.getElementById("get-number").innerHTML,
                c = document.getElementById("chat-input").value,
                d = "https://web.whatsapp.com/send",
                e = b,
                f = "&text=" + c;
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) var d =
                "whatsapp://send";
            var g = d + "?phone=" + e + f;
            window.open(g, "_blank");
        }
    }

    const whatsapp_chat = document.getElementById("whatsapp-chat");

    function cerrar_chat() {
        whatsapp_chat.classList.add("hide");
        whatsapp_chat.classList.remove("show");

    }

    function mostrar_chat() {
        whatsapp_chat.classList.add("show");
        whatsapp_chat.classList.remove("hide");
    }

</script>

<script>
import { t } from '../stores'
</script>

<div class="card">
    <div class="title">
        <h2>{$t.form1.title}</h2>
    </div>
    <div class="f">
        <form action="../form1.php" method="POST">
            <input type="text" name="name" placeholder="{$t.form1.nombre}" required>
            <textarea name="message" cols="20" rows="10" placeholder="{$t.form1.mensaje}"></textarea>
            <input type="mail" name="mail" placeholder="{$t.form1.mail}" required>
            <input class="first-name" type="text" name="firstname">
            <button class="btn-cyan">{$t.form1.button}</button>
        </form>
    </div>
</div>

<style>
.first-name{
    position:absolute;
    top:0;
    left:0;
    opacity:0;
    pointer-events: none;
}
.card{
    max-width: 24em;
    z-index: 15;
    margin: 0 auto;
    padding-bottom: 1em;
    width:100%;
}
.title{
    background: var(--cyan);
    border-radius: var(--border-radius) var(--border-radius) 0 0 ;
    padding: .2rem .5em;
    margin-bottom: 1.3em;
}
h2{
    color:white;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 1.4em;
    text-align: center;
}
button{
    margin-top:2em;
}
input,textarea{
    margin-bottom: 2em;
    width:100%;
}
.f{
    padding:0 1.5em 1em;
}
@media (min-width:768px){
    .card{
        min-width:22em;
    }
}
@media (min-width: 1300px){
    .card{
        margin:0;
    }
    .f{
    padding:0 2em 1em;
}
}
</style>

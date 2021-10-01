<script>
import { t } from '../stores'
import Form1 from './Form1.svelte';

</script>

<div class="cont">
    <div class="background">
        <div class="gradient"></div>
        <div class="shape"></div>
    </div>
    <div class="content">
        <div class="text">
            <div class="text-cont">
                <h1>{$t.title}</h1>
                <p class="sub">{$t.sub}</p>
                <p class="sub2">{$t.sub2}</p>
            </div>
        </div>
        <Form1></Form1>
    </div>
</div>



<style>

.cont {
    padding: 1.2rem;
    padding-top: 0;
    margin-top: 0;
    min-height: 100vh;
    max-width:100vw;
    overflow-x: hidden;
    overflow-y:visible;
}

h1 {
    font-size: 2.3em;
    line-height: 1.2em;
    margin-top: 4rem;
}

.sub2 {
    font-size: .9rem;
    font-weight: 300;
    margin-bottom: 1.5em;
}

.content{
    display: flex;
    align-items: flex-start;
    flex-flow: row wrap;
}
.gradient {
    background-image: url('/images/background-mobile-l.png'),linear-gradient(#00b1ff 0%, #60f 53.2%, #ff00b5 100%);
    width: 100vw;
    height: 100vh;
    background-size: cover ;
    background-position: bottom center;
    position: absolute;
    z-index:-2;
    top: 0;
    left: 0;
    background-attachment: fixed;
}

.shape {
    background: url('/images/hero-shape-mobile-l.svg');
    background-repeat: no-repeat;
    filter:drop-shadow(0 0 2em rgba(0,0,0,.6));
    background-position: bottom;
    width: 100vw;
    height: 80vh;
    background-size: cover;
    z-index: -1;
    position: absolute;
    top: 0;
    left: 0;
}

@media (min-width: 768px){
    .gradient{
        background-image: url('/images/background-desktop-l.svg'),linear-gradient(#3cc5ff, rgb(168, 110, 255), #ff60d2);
        background-size: cover;
        background-position: bottom center;
    }
    .shape{
        background: url('/images/hero-shape-desktop-l.svg');
        height:100%;
        background-size: cover;
        background-position: right;
        width:100%;
    }
    *{
        text-align: left;
    }
    .text{
        max-width:80%;
    }
    h1{
        font-size: 4em;
        margin-top:0;
    }
    p{
        font-size: 1.3em;
    }
    .sub2{
        font-size: 1.1em;
    }
    .content{
        margin: 0 auto;
        gap:2em;
        padding:2em 0;
    }
    .content>*{
        margin: 0 auto;
    }
    .cont{
        padding-top:6em;
    }
}
@media (min-width: 1200px){
    .cont{
        padding-top:unset;
        display: flex;
        align-items: center;
    }
    .content{
        margin:unset;
        flex-flow:row nowrap;
        max-width:80em;
        width:80%;
        margin:0 auto;
    }
    .content>*{
        margin:unset;
    }
    .gradient {
        background-size: contain;
        background-position: right;
    }
    .shape{
        width:80%;
    }
}
</style>

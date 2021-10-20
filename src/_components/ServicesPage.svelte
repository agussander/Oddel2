<script>
import { goto } from '@roxi/routify';
import { t } from '../stores';

    import Form1 from './Form1.svelte'
    export let title,sub,button,
    title1,img1,p1,button1,
    title2,img2,p2,button2,
    title3,img3,p3,button3,
    alt1,alt2,alt3,img,plus,title4,title5,img4,img5,alt4,alt5,button4,button5,p4,p5;
    
</script>

<section class="hero" style="background-image: url('/images/{img}');">
    <div class="card c1">
        <h1>{title}</h1>
        <p class="sub">{sub}</p>
        <button on:click={()=>$goto($t.links.contact)}>{button}</button>
    </div>
</section>
<section class="body">
    <div class="cont">
        <h2 class="mobileh2">{title1}</h2>
        <div class="flex">
            <img src="/images/services/{img1}" alt="{alt1}">
            <div>
                <h2 class="desktoph2">{title1}</h2>
                <p class="p">{@html p1}</p>
                <button on:click={()=>$goto($t.links.contact)}>{button1}</button>
                <slot name=slot1></slot>
            </div>
        </div>
    </div>
    <div class="cont">
        <h2 class="mobileh2">{title2}</h2>
        <div class="flex invert">
            <img class="toRight" src="/images/services/{img2}" alt="{alt2}">
            <div>
                <h2 class="desktoph2">{title2}</h2>
                <p class="p">{@html p2}</p>
                <button on:click={()=>$goto($t.links.contact)}>{button2}</button>
                <slot name=slot2></slot>
            </div>
        </div>
    </div>
    <div class="cont">
        <h2 class="mobileh2">{title3}</h2>
        <div class="flex">
            <img src="/images/services/{img3}" alt="{alt3}">
            <div>
                <h2 class="desktoph2">{title3}</h2>
                <p class="p">{@html p3}</p>
                <button on:click={()=>$goto($t.links.contact)}>{button3}</button>
                <slot name=slot3></slot>
            </div>
        </div>
    </div>
    {#if plus}
        <div class="cont">
            <h2 class="mobileh2">{title4}</h2>
            <div class="flex invert">
                <img class="toRight" src="/images/services/{img4}" alt="{alt4}">
                <div>
                    <h2 class="desktoph2">{title4}</h2>
                    <p class="p">{@html p4}</p>
                    <button on:click={()=>$goto($t.links.contact)}>{button4}</button>
                </div>
            </div>
        </div>
    {/if}
</section>
<section class="end">
    <div class="card end-form">
        <h2 class="endh2">{$t.endForm.title}</h2>
        <p>{$t.endForm.p}</p>
        <Form1></Form1>
    </div>
</section>

<style>
section{
    max-width: 100vw;
    overflow-x: hidden;
}
.endh2{
    margin-bottom: 0;
}
.desktoph2{
    display: none;
}
.hero{
    background-size: cover;
    background-position: bottom left;
    width:100vw;
    min-height:100vh;
    padding:2em;
}
.c1{
    margin:35% auto 0;
    padding: 2em 1em;
    text-align:center;
}
.cont{
    margin-bottom: 8em;
}
.body{
    padding:0 1.5em;
    box-shadow: var(--shadow1);
}
.mobileh2{
    text-align: center;
}
h1{
    text-transform: uppercase;
    font-size: 1.8rem;
    font-weight: 800;
}
p{
    margin-bottom: 2em;
    text-align: left;
    font-size: 1rem;
}
img{
    width:100%;
    margin:0 auto;
}
.end{
    display: flex;
    justify-content: center;
    background-image:linear-gradient(210deg,#ff40df 0%,rgb(139, 50, 199), #5fedff 100%);
    background-attachment: fixed;
    padding:.5em;
}
.end-form{
    margin:2em auto;
    padding:1em 2em 2em;
    display: flex;
    align-items: center;
    flex-flow: column;
}
@media (min-width: 768px){
    .hero{
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        min-height: 100vh;
    }
    img{
        max-width: 37em;
        width:300%;
        object-fit: contain;
    }
    .mobileh2{
        display:none;
    }
    .desktoph2{
        display: unset;
        text-align:left;
        font-weight: 600;
        font-size: 2em;
    }
    h1{
        font-size: 2.8em;
        text-align: left;
    }
    .sub{
        font-size: 1.1em;
        margin-bottom: 3em;
        margin-top: 0;
    }
    button{
        box-sizing: content-box;
        width: auto;
    }
    .body{
        padding:5em;
    }
    .c1{
        width: 50%;
        margin-top:10%;
        padding:3em 4em 5em;
        transform: translateX(20%);
        text-align: left;
    }
    .sub{
        width:70%;
    }
    .flex{
        display:flex;
        gap:5em;
        max-width:80%;
        margin:0 auto;
    }
    p{
        font-size: 1.1em;
    }

    .invert{
        flex-flow:row-reverse;
    }
    img{
        max-height: 40em;
    }

}
</style>
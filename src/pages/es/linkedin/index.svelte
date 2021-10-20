<script>
import { goto } from '@roxi/routify'
import { t,lang } from '../../../stores'
import es from '../../../t/es'
import Form1 from '../../../_components/Form1.svelte'
$lang='es';
$t=es;
</script>

<section class="hero" style="background-image: url('/images/background-linkedin.png');">
    <div class="card c1">
        <h1>LinkedIn</h1>
        <p class="sub">{$t.in.sub}</p>
        <button on:click={()=>$goto($t.links.contact)}>{$t.in.button}</button>
    </div>
</section>
<main>
    <section class="s1">
        <h2>{@html $t.in.sabias}</h2>
        <div class="flex1">
            <img class="world" src="/images/linkedin/world.svg" alt="{$t.in.alt1}">
            <div class="world_text">
                <h3 class="ademas">{@html $t.in.ademas}</h3>
                <p>{$t.in.ademas_2}</p>
            </div>
        </div>
    </section>
    <section class="s2">
        <h3 class="sabemos">{$t.in.sabemos}</h3>
        <p class="sabemos_p">{$t.in.sabemos_2}</p>
        <div>
            <div class="flex2 bullets">
                <img src="/images/linkedin/megaphone.svg" alt="megaphone / megáfono">
                <div>
                    <h4 class="bullet">{$t.in.bullets.t1}</h4>
                    <p>{$t.in.bullets.p1}</p>
                </div>
            </div>
            <div class="flex2 inverted bullets">
                <img src="/images/linkedin/www.svg" alt="webpage icon / icono de página web">
                <div>
                    <h4 class="bullet">{$t.in.bullets.t2}</h4>
                    <p>{$t.in.bullets.p2}</p>
                </div>
            </div>
            <div class="flex2 bullets">
                <img src="/images/linkedin/bars.svg" alt="Economic's graphic / gráfico de economía">
                <div>
                    <h4 class="bullet">{$t.in.bullets.t3}</h4>
                    <p>{$t.in.bullets.p3}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="s3">
        <div class="card card2">
            <h3 class="opt-title">{$t.in.optimation.title}</h3>
            <div class="grid">
                {#each $t.in.optimation.list_titles as t,i}
                    <div class="card-item">
                        <img src="/images/linkedin/icons/{i+1}.svg" alt="icon">
                        <h4>{t}</h4>
                    </div>
                {/each}
            </div>
            <button style="position: relative; left: 50%; transform: translateX(-50%)">{$t.in.button}</button>
        </div>
    </section>
</main>
<section class="end">
    <div class="card end-form">
        <h2 class="endh2">{$t.endForm.title}</h2>
        <p>{$t.endForm.p}</p>
        <Form1></Form1>
    </div>
</section>

<style>
.hero{
    background-size: cover;
    background-position: bottom left;
    width:100vw;
    min-height:100vh;
    padding:2em;
}
h1{
    text-transform: uppercase;
    font-size: 1.8rem;
    font-weight: 800;
}
h2{
    font-weight: 500;
    text-align: center;
    margin:0 auto 2em;
}
.c1{
    margin:35% auto 0;
    padding: 2em 1em;
    text-align:center;
}
p{
    margin-bottom: 2em;
    text-align: left;
    font-size: 1rem;
}
.flex2{
    display: flex;
    flex-flow: column;
}
.world{
    max-width: 90%;
    margin: 0 auto 1em;
}
.ademas{
    font-weight: 500;
}
main{
    padding: 4em 1.5em;
}
.s1{
    margin-bottom: 6em;
}
.sabemos{
    text-transform: uppercase;
    text-align: center;
    margin:0 auto 1em;
    font-size: 2em;
    font-weight: 600;
}
.sabemos_p{
    text-align: center;
    max-width: 40em;
    margin:0 auto
}
.bullet{
    text-transform: uppercase;
    font-weight: 600;
    font-size: 1.7em;
    margin-bottom: .2em;
}
.bullets{
    margin: 3em auto;
    text-align: center;
}
.bullets>img{
    max-width: 10em;
    margin: 0 auto;
}
.card2{
    margin:0 auto;
    padding:3em 2em;
}
.opt-title{
    color: var(--text3);
    font-weight: 500;
    font-size: 1.8em;
    text-align: center;
    margin: 0 auto 2em;
}
.card-item>h4{
    font-size: 1.1em;
    font-weight: 500;
}
.card-item>img{
    max-width: 7em;
    height:6em;
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
.endh2{
    margin-bottom: 0;
    font-size: 1.5em;
    font-weight: 700;
}

@media (min-width: 768px){
    .hero{
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        min-height: 100vh;
    }
    main{
        padding: 8em
    }
    h1{
        font-size: 2.8em;
        text-align: left;
    }
    .c1{
        width: 50%;
        margin-top:10%;
        padding:3em 4em 5em;
        transform: translateX(20%);
        text-align: left;
    }
    .sub{
        width:80%;
    }
    h2{
        max-width: 16em;
        font-size: 2.8em;
    }
    p{
        font-size: 1.1em;
    }
    .flex2{
        flex-flow: row;
        gap:5em
    }
    .s1{
        max-width: 75%;
        margin:0 auto 10em;
    }
    .bullets{
        max-width: 50em;
        margin:5em auto;
        text-align: left;
    }
    .card2{
        width:max-content;
        box-sizing: content-box;
        padding: 3em 5em;
    }
    .opt-title{
        font-size: 2.3em;
    }
    .card-item{
        max-width: 18em;
    }
    .card-item>h4{
        font-size: 1.5em;
    }
    .grid{
        margin: 0 auto 3em;
        display: grid;
        max-width:45em;
        grid-template-columns: repeat(2,1fr);
        gap:4em;
        justify-content: center;
    }
    .inverted{
        flex-flow: row-reverse;
    }
    .bullets>img{
        max-width: 11em;
    }
    .inverted>img{
        max-width: 14em;
    }
}
@media (min-width: 1112px){
    .ademas{
        font-size: 2em;
    }
    .world{
        max-width: 28em;
    }
    .world_text{
        display: flex;
        flex-flow: column;
        align-items: center;
        justify-content: center;
    }
    .flex1{
        display: flex;
        gap:5em
    }   
}
</style>
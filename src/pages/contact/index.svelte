<script>
import {t,lang} from '../../stores'
import {slide} from 'svelte/transition'
import {onMount} from 'svelte'
import en from '../../t/en'
import {metatags} from '@roxi/routify'
metatags.title = 'Oddel Digital Marketing';
metatags.description = 'Marketing services to boost yout company';

onMount(async ()=>{
$lang='en';
$t=en;
});

const faqs=[
    {title:$t.contact.f1t,p:$t.contact.f1},
    {title:$t.contact.f2t,p:$t.contact.f2},
    {title:$t.contact.f3t,p:$t.contact.f3},
    {title:$t.contact.f4t,p:$t.contact.f4},
    {title:$t.contact.f5t,p:$t.contact.f5},
    {title:$t.contact.f6t,p:$t.contact.f6},
    {title:$t.contact.f7t,p:$t.contact.f7},
    {title:$t.contact.f8t,p:$t.contact.f8},
    {title:$t.contact.f9t,p:$t.contact.f9},
    {title:$t.contact.f10t,p:$t.contact.f10}
];
let opened=[];
let inp=[];
</script>

<section>
    <div class="card main">
        <div class="cont">
            <div class="text">
                <h1>{$t.contact.title}</h1>
                <p>{$t.contact.p1}</p>
                <p>{$t.contact.p2}</p>
                <p>{$t.contact.p3}</p>
            </div>
            <div class="form">
                <div class="form-subcont">
                    <form action="../../form1.php" method="POST" class="sticky">
                        <label for="">{$t.form2.l1}</label>
                        <input type="text" required>
                        <p>{$t.form2.l2}</p>
                        <div class="check">
                            <label class:checked={inp[0]} class="ch b">
                                <input class="ch c" type="checkbox" bind:checked={inp[0]}>
                                {$t.nav.web}</label>
                        </div>
                        <div class="check">
                            <label class:checked={inp[1]} class="ch b"><input class="ch c" type="checkbox" bind:checked={inp[1]}>{$t.nav.redes}</label>
                        </div>
                        <div class="check">
                            <label class:checked={inp[2]} class="ch b"><input class="ch c" type="checkbox" bind:checked={inp[2]}>{$t.nav.com}</label>
                        </div>
                        <small>{$t.form2.small}</small>
                        <label for="">{$t.form2.l3}</label>
                        <textarea name="message"  cols="30" rows="10"></textarea>
                        <label for="">{$t.form2.l4}</label>
                        <input type="text" required>
                        <button class="btn-cyan">{$t.form2.button}</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="faq-con">
            <h2>{$t.contact.faqTitle}</h2>
            {#each faqs as f,i}
            <div class="card faq" on:click={()=>opened[i]=!opened[i]}>
                <div class="faq-title">
                    <h3>{f.title}</h3>
                    <span class="icon" style="transform: rotate({opened[i]?180:0}deg);"></span>
                </div>
                {#if opened[i]}
                    <p transition:slide>{f.p}</p>
                {/if}
            </div>
            {/each}
        </div>
    </div>
</section>

<style>
h1{
    text-transform: uppercase;
    font-size: 2.2em;
}
.cont{
    display:flex;
    gap:2em;
    justify-content: space-between;
}
.card{
    padding:2em 4em;
}
section{
    padding:6em;
    background-image:linear-gradient(50deg,#31c1ff 20%, rgb(154, 87, 255) 53.2%, #ff4dcc 100%);
}
.text{
    max-width:50%;
}
.ch{
    display:inline;
    box-sizing: content-box;
    width:unset;
}
label{
    display:block;
    color:var(--text);
    cursor: pointer;
}
.form-subcont{
    position:sticky;
}
.b{
    border: 2px solid var(--cyan);
    border-radius: .3em;
    padding: .2em .4em;
    margin-right:1em;
    background: white;
}
.b:hover{
    filter: drop-shadow(0 2px 4px rgb(212, 212, 212));
}
.c{
    margin-right: .5em;
    min-width: unset;
}
.check{
    display:inline-block;
}
.checked{
    background: var(--cyan);
    color:white;
}

.form{
    padding: 0 1em;
}
form{
    position:sticky;
}
.faq{
    padding:.5em 2em .5em 3em;
    margin-bottom: 1em;
    width:50%;
    cursor:pointer;
}
.faq-title{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
h3{
    color:var(--text);
    font-weight: 500;
}
.icon{
    min-width:1em;
    min-height:1em;
    display: block;
    opacity:.5;
    background:url('/images/icon-up.svg') no-repeat;
    background-position: center;
}
small{
    color:var(--cyan);
    font-size: .8em;
    display: block;
    margin-bottom: 1.5em;
}
@media (max-width: 768px){
    section{
        padding:1em;
    }
    .main{
        margin-top: 4em;
        padding:.5em 1.5em
    }
    .cont{
        flex-flow: column;
    }
    .text{
        max-width: 100%;
    }
    .faq{
        width:100%;
        padding:.2rem 1em;
    }
    h3{
        font-size: 1.05rem;
    }
    .icon{
        min-height:.9rem;
        min-width: .9rem;
    }
}
</style>
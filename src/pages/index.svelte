<script>
import { metatags, goto } from '@roxi/routify'
import {t,mobile, lang} from '../stores'
import Hero from '../_components/Hero.svelte'
import Services from '../_components/Services.svelte'
import Wwh from '../_components/Wwh.svelte'
import International from '../_components/International.svelte'
import Clients from '../_components/Clients.svelte'
import ServicesDesktop from '../_components/Desktop/ServicesDesktop.svelte'
import en from '../t/en'
import {onMount} from 'svelte'


onMount(async ()=>{
$lang='en';
$t=en;
});

metatags.title = 'Oddel Digital Marketing'
metatags.description = 'Marketing services to boost your company'

</script>


<section>
    <Hero></Hero>
</section>
<section >
    {#if $mobile}
        <Services></Services>
    {:else}
        <ServicesDesktop></ServicesDesktop>
    {/if}
</section>
<div>
    <Wwh></Wwh>
</div>
<section class="center">
    <International>
        <h2>{$t.internarional.title}</h2>
    </International>
</section>
<section class="relative">
    <Clients>
        <h2>{$t.clients.title}</h2>
    </Clients>
    <div class="counseling card">
        <h2>{$t.counseling.title}</h2>
        <p>{$t.counseling.p}</p>
        <button on:click={$goto($t.links.contact)}>{$t.buttons.counseling}</button>
    </div>
    <div class="end-gradient">
    </div>
</section>



<style>
.relative{
    position:relative;
    padding-bottom: 2em;
    padding-top:1em;
}
h2{
    text-align: center;
}
.counseling{
    margin:6em auto 2em;
    padding:1em 3em 3em;
    text-align: center;
    max-width: 40em;
}
.counseling>p{
    margin:1.5em 0;
}
.end-gradient{
    position: absolute;
    width:100%;
    height:40em;
    background-image: linear-gradient(210deg,#ff40df 0%,rgb(139, 50, 199), #5fedff 100%);
    background-attachment: fixed;
    z-index:-1;
    bottom:0;
}

@media (min-width:768px){
    section{
        min-height: 100vh;
        max-width: 100vw;
        overflow-x: hidden;
    }
    .center{
        display: flex;
        align-items: center;
        padding:0 1em;
    }
}
</style>


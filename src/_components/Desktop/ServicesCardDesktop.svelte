<script>
import { goto } from '@roxi/routify';

import { slide } from 'svelte/transition'
import { t } from "../../stores";
export let title,text,video,link;
let opened;
</script>


<div class="card"
on:mouseenter={()=>opened=true}
on:mouseleave={()=>opened=false}
on:click={$goto(link)}
style="height:{opened? 580 : 480}px">
    <video src="../videos/{video}.mp4" autoplay loop muted></video>
    <div class="s">
        <h3>{title}</h3>
        {#if opened}
            <p transition:slide="{{duration:800}}">{text}</p>
        {/if}
            <button style="opacity:{opened? '1' : '0' }" on:click={$goto(link)}>{$t.buttons.see}</button>
    </div>
</div>


<style>
    *{
        text-align: center;
    }
video{
    max-width: 100%;
    max-height: 100%;
}
.s{
    position: absolute;
    bottom:0;
    padding:1em;
    width:100%;
    margin-bottom: 1em;
}
.card{
    background: white;
    background-size: cover;
    background-repeat: no-repeat;
    width: 20em;
    margin-bottom: 3.5em;
    display:flex;
    align-items: flex-start;
    overflow: hidden;
    position: relative;
    cursor:pointer;
}

h3{
    text-transform: uppercase;
    font-size: 1.8em;
    line-height: 1.3em;
    margin-bottom: 1.5rem;
}
button{
    font-size: .8em;
    padding:.8em;
    width:100%;
}
@media (min-width: 768px){
    .s{
        margin-bottom: 3em;
    }
    .card{
        padding-bottom:2em;
        transition: all ease 500ms
    }
    button{
        transition: all linear 400ms;
    }
}
</style>

<script>
import { goto } from "@roxi/routify";

import { t } from "../stores";
export let title,video,link;
</script>


<div class="card">
    <video src="../videos/{video}.mp4" playsinline autoplay muted loop></video>
    <div class="s">
        <h3>{title}</h3>
        <button on:click={$goto(link)}>{$t.buttons.see}</button>
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
    margin-bottom: 1em;
    z-index: 2;
}
.card{
    background: linear-gradient(rgba(255,255,255,0),rgba(255,255,255,1)),var(--image);
    background-size: cover;
    background-repeat: no-repeat;
    width: 20em;
    height:30em;
    margin-bottom: 3.5em;
    display:flex;
    align-items: flex-start;
    overflow: hidden;
    position: relative;
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
</style>

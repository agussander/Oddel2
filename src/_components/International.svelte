<script>
import { goto } from '@roxi/routify';
import {t} from '../stores'
</script>

<div class="wrapper">
    <slot></slot>
    <div class="flex">
        <img src="../images/map-{$t.internarional.mapCode}.svg" alt="{$t.internarional.alt  }">
    </div>
    <div class="cont">
        <p>{$t.internarional.p}</p>
        <button on:click={$goto($t.links.contact)}>{$t.buttons.pres}</button>
    </div>
</div>

<style>
    .wrapper{
        margin:0 auto;
    }
.flex{
    width:100%;
    display: flex;
    justify-content: center;
    overflow-x: hidden;
}
img{
    width: 110%;
    object-position: center;
    max-width: 800px;
}
.cont{
    padding:1.2em;
    display: flex;
    flex-flow: column wrap;
}
p{
    text-align: center;
}
@media (min-width: 768px){
    .cont{
        flex-flow:row nowrap;
        align-items: center;
        max-width: 768px;
        margin:0 auto;
        gap:1em;
        margin:0 auto;
    }
    p{
        text-align: left;
    }
}
</style>
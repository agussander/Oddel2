<script>
import ServicesPage from "../../_components/ServicesPage.svelte";
import { t, lang } from '../../stores'
import {onMount} from 'svelte'
import en from '../../t/en'
import {metatags} from '@roxi/routify'
metatags.title = 'Oddel Digital Marketing';
metatags.description = 'Marketing services to boost yout company';
onMount(async ()=>{
$lang='en';
$t=en;}
);
const img={
    img:'background-media.svg',
    img1:'fb-ads.png',
    alt1:'a',
    img2:'google-ads.png',
    alt2:'alt2',
    img3:'seo-sem.png',
    alt3:'alt3',
    img4:'comunity.png',
    alt4:'community managment',
    img5:'linkedin.png',
    alt5:'linkedin',
    
}
</script>

<ServicesPage {...$t.media} {...img} plus=true></ServicesPage>
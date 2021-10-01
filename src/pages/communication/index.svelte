<script>
import ServicesPage from "../../_components/ServicesPage.svelte";
import { t,lang } from '../../stores'
import {onMount} from 'svelte'
import en from '../../t/en'
import {metatags} from '@roxi/routify'
metatags.title = 'Oddel Digital Marketing';
metatags.description = 'Marketing services to boost yout company';

onMount(async ()=>{
$lang='en';
$t=en;
});

const img={
    img:'background-com.svg',
    img1:'logo.png',
    alt1:'a',
    img2:'merch.png',
    alt2:'alt2',
    img3:'foto.png',
    alt3:'alt3'
}
</script>

<ServicesPage {...$t.com} {...img}></ServicesPage>
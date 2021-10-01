import { writable } from "svelte/store";
import { persistStore } from "./persistStores";

import en from './t/es'


export const lang=writable('en');
export const t=writable(en);

export const mobile=writable(false);
export const w=writable(window.innerWidth);
export const h=writable(window.innerHeight);

export const langIsSet=persistStore("langIsSet", false);

export const urlT = (url,lang) =>  lang!=='en' ?  [`./${lang}`,url].join('') : url;





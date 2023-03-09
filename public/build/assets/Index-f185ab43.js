import{_ as g}from"./AuthenticatedLayout-8f6d790b.js";import{o as l,f as a,b as e,F as i,s as _,c as b,n as m,u as n,g as c,l as f,a as r,w as d,X as y,t as s,d as h}from"./app-9bd51c0f.js";import"./ApplicationLogo-98145058.js";const k={key:0},v={class:"flex flex-wrap -mb-1"},w=["innerHTML"],L={__name:"Pagination",props:{links:Array},setup(o){return(p,x)=>o.links.length>3?(l(),a("div",k,[e("div",v,[(l(!0),a(i,null,_(o.links,(t,u)=>(l(),a(i,{key:u},[t.url===null?(l(),a("div",{key:0,class:"mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded",innerHTML:t.label},null,8,w)):(l(),b(n(c),{key:1,class:m(["mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-indigo-400 hover:text-white focus:border-indigo-600 focus:text-white",{"bg-indigo-500 text-white":t.active}]),href:t.url,innerHTML:t.label},null,8,["class","href","innerHTML"]))],64))),128))])])):f("",!0)}},T={class:"font-semibold text-xl text-gray-800 leading-tight"},$={class:"py-12"},B={class:"max-w-7xl mx-auto sm:px-6 lg:px-8"},M={class:"flex justify-start m-2 p-2"},N={class:"bg-white overflow-hidden shadow-sm sm:rounded-lg"},H={class:"p-6 text-gray-900"},P={class:"w-full table-auto border-collapse"},V=e("thead",null,[e("tr",null,[e("th",{class:"px-4 py-2 text-left"},"ID"),e("th",{class:"px-4 py-2 text-left"},"Titel"),e("th",{class:"px-4 py-2 text-left hidden lg:block"},"Beschreibung"),e("th",{class:"px-4 py-2 text-left"},"Lager"),e("th",{class:"px-4 py-2 text-left"},"Menge"),e("th",{class:"px-4 py-2 text-left"},"Preis")])],-1),C={class:"[&>*:nth-child(odd)]:bg-gray-100"},j={class:"border px-4 py-2"},D={class:"border px-4 py-2"},E={class:"border px-4 py-2 hidden lg:block"},F={class:"border px-4 py-2"},I={class:"border px-4 py-2"},S={class:"border px-4 py-2"},z={class:"border px-4 py-2"},q={__name:"Index",props:{products:Object},setup(o){return(p,x)=>(l(),a(i,null,[r(n(y),{title:"Lagerverwaltung"}),r(g,null,{header:d(()=>[e("h2",T,"Produkte - Seite "+s(o.products.current_page)+" von "+s(o.products.last_page),1)]),default:d(()=>[e("div",$,[e("div",B,[e("div",M,[r(n(c),{href:"/produkte/neu",class:"px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded"},{default:d(()=>[h("Neues Produkt erstellen")]),_:1})]),e("div",N,[e("div",H,[e("table",P,[V,e("tbody",C,[(l(!0),a(i,null,_(o.products.data,t=>(l(),a("tr",{key:t.id},[e("td",j,s(t.id),1),e("td",D,s(t.title),1),e("td",E,s(t.description),1),e("td",F,s(t.storage.name),1),e("td",I,s(t.amount),1),e("td",S,s(t.price)+"€",1),e("td",z,[r(n(c),{href:`/produkte/${t.id}/edit`,class:"px-2 py-1 bg-indigo-500 hover:bg-indigo-600 text-white rounded"},{default:d(()=>[h("Edit")]),_:2},1032,["href"])])]))),128))])]),r(L,{class:"mt-6",links:o.products.links},null,8,["links"])])])])])]),_:1})],64))}};export{q as default};
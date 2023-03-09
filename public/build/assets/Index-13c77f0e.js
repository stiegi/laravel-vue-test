import{_ as p}from"./AuthenticatedLayout-b94c357b.js";import{f as o,a as s,u as a,w as r,F as c,o as i,X as _,b as e,g as d,d as l,s as u,t as n}from"./app-52d44647.js";import"./ApplicationLogo-3b20458d.js";const g=e("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"},"Lagerverwaltung",-1),f={class:"py-12"},x={class:"max-w-7xl mx-auto sm:px-6 lg:px-8"},y={class:"flex justify-start m-2 p-2"},b={class:"bg-white overflow-hidden shadow-sm sm:rounded-lg"},m={class:"p-6 text-gray-900"},v={class:"w-full table-auto border-collapse"},w=e("thead",null,[e("tr",null,[e("th",{class:"px-4 py-2 text-left"},"ID"),e("th",{class:"px-4 py-2 text-left"},"Name"),e("th",{class:"px-4 py-2 text-left"},"Beschreibung")])],-1),N={class:"[&>*:nth-child(odd)]:bg-gray-100"},$={class:"border px-4 py-2"},E={__name:"Index",props:{storages:Array},setup(h){return(B,L)=>(i(),o(c,null,[s(a(_),{title:"Lagerverwaltung"}),s(p,null,{header:r(()=>[g]),default:r(()=>[e("div",f,[e("div",x,[e("div",y,[s(a(d),{href:"/lager/neu",class:"px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded"},{default:r(()=>[l("Neues Lager erstellen")]),_:1})]),e("div",b,[e("div",m,[e("table",v,[w,e("tbody",N,[(i(!0),o(c,null,u(h.storages,t=>(i(),o("tr",{key:t.id},[s(a(d),{href:`/lager/${t.id}`,class:"border px-4 py-2 cursor-pointer hover:bg-gray-200",as:"td"},{default:r(()=>[l(n(t.id),1)]),_:2},1032,["href"]),s(a(d),{href:`/lager/${t.id}`,class:"border px-4 py-2 cursor-pointer hover:bg-gray-200",as:"td"},{default:r(()=>[l(n(t.name),1)]),_:2},1032,["href"]),s(a(d),{href:`/lager/${t.id}`,class:"border px-4 py-2 cursor-pointer hover:bg-gray-200",as:"td"},{default:r(()=>[l(n(t.description),1)]),_:2},1032,["href"]),e("td",$,[s(a(d),{href:`/lager/${t.id}/edit`,class:"px-2 py-1 bg-indigo-500 hover:bg-indigo-600 text-white rounded"},{default:r(()=>[l("Edit")]),_:2},1032,["href"])])]))),128))])])])])])])]),_:1})],64))}};export{E as default};
(window.webpackJsonp=window.webpackJsonp||[]).push([[16],{406:function(e,t,c){},437:function(e,t,c){"use strict";c.r(t);var s=c(1),a=c(310),r=c(9),n=c(5),l=c(4),o=c(2),i=c(8),u=c.n(i),b=c(394),m=c.n(b),d=c(297),p=c(432),h=c(438),_=c(440),O=c(430),j=Object(O.a)((function(e){var t=e.defaultRefinement,c=e.onSubmit,a=e.refine,r=Object(s.useState)(t),n=u()(r,2),i=n[0],b=n[1];return Object(s.createElement)("form",{action:"",className:"resources-search-form",noValidate:!0,onSubmit:function(e){e.preventDefault(),a(i),c(i)},role:"search"},Object(s.createElement)("input",{type:"text",placeholder:Object(o.__)("Search Resources","bluehost-wordpress-plugin"),value:i,onChange:function(e){return b(e.target.value)},"aria-label":Object(o.__)("Search","bluehost-wordpress-plugin")}),Object(s.createElement)("button",{type:"submit"},Object(s.createElement)(l.E,null),Object(s.createElement)("span",{className:"screen-reader-text"},Object(o.__)("Search Resources","bluehost-wordpress-plugin"))))})),f=c(6),v=c.n(f),E=c(3),g=c.n(E);function w(e){var t,c=e.className,a=e.group,r=e.isChecked,n=e.onChange,l=e.value;return Object(s.createElement)("label",{className:g()((t={btn:!0,"btn-secondary":!0},v()(t,"".concat(c,"__option"),!0),v()(t,"--is-active",r),t))},Object(s.createElement)("input",{checked:r,className:"".concat(c,"__option-field"),name:a,onClick:function(){r&&n("")},onChange:function(){n(l)},type:"radio",value:l}),Object(s.createElement)("span",{className:"".concat(c,"__option-field-label")},l))}function N(e){var t=e.className,c=e.defaultValue,a=void 0===c?"":c,r=e.group,n=e.onChange,l=e.options,o=Object(s.useState)(a),i=u()(o,2),b=i[0],m=i[1];return Object(s.createElement)("div",{className:"".concat(t,"__group")},l.map((function(e,c){return Object(s.createElement)(w,{className:t,group:r,isChecked:b===e,key:c,value:e,onChange:function(e){m(b!==e?e:""),n(e)}})})))}function y(e){var t=e.className,c=void 0===t?"resources-search-filters":t,a=e.defaultValue,r=e.group,n=e.label,l=e.onChange,o=e.options;return Object(s.createElement)("div",{className:c},Object(s.createElement)("span",{className:"".concat(c,"__label screen-reader-text")},n),Object(s.createElement)(N,{className:c,defaultValue:a,group:r,onChange:l,options:o}))}var k=c(439),C=c(431);function S(e,t){return e.length<=t?e:e.substr(0,t)+"..."}var x=function(e){var t=e.hasMore,c=e.onClick;return t?Object(s.createElement)("div",{className:"button-container"},Object(s.createElement)("button",{className:"components-button bluehost is-secondary is-link",onClick:c},Object(o.__)("More","bluehost-wordpress-plugin"))):null},V=Object(k.a)((function(e){e.hasMore;var t=e.hits,c=e.refineNext;return t.length?Object(s.createElement)(s.Fragment,null,Object(s.createElement)("div",{className:"resources-search-results"},t.map((function(e,t){var c=e.permalink,a=e.content,r=e.post_title,n=new URL(c);return n.host="bluehost.com",Object(s.createElement)("a",{className:"resource-card",href:n,key:t,rel:"noreferrer noopener",target:"_blank"},Object(s.createElement)("div",{className:"resource-card__title",dangerouslySetInnerHTML:{__html:r}}),Object(s.createElement)("div",{className:"resource-card__description",dangerouslySetInnerHTML:{__html:S(a,100)}}))}))),Object(s.createElement)(x,{hasMore:!1,onClick:c})):Object(s.createElement)("p",{className:"resource-search-no-results"},Object(o.__)("There were no results for your query. Please try again.","bluehost-wordpress-plugin"))})),F=Object(C.a)((function(){return Object(s.createElement)(V,null)})),M=m()("AVE0JWZU92","92e960b820b03fb532d5f440191ec0fe"),L=Object(p.a)(),R=function(){var e=Object(s.useState)(""),t=u()(e,2),c=t[0],a=t[1],r=Object(s.useState)({query:c}),n=u()(r,2),l=n[0],i=n[1],b=Object(s.useState)(["post_type:post"]),m=u()(b,2),p=m[0],O=m[1],f=Object(s.useState)("Websites"),v=u()(f,2),E=v[0],g=v[1];return Object(s.useEffect)((function(){O(E?["post_type:post","taxonomies.category:".concat(E)]:["post_type:post"])}),[E]),Object(s.createElement)(s.Fragment,null,Object(s.createElement)(h.a,{indexName:"bh_rc_searchable_posts",searchClient:M,searchState:l,onSearchStateChange:i},Object(s.createElement)(_.a,{hitsPerPage:6,filters:Object(d.join)(p," AND "),distinct:!0}),Object(s.createElement)(j,{defaultRefinement:c,onSubmit:function(e){return a(e)}}),Object(s.createElement)(y,{defaultValue:E,group:"taxonomies.user_level_tax",label:Object(o.__)("Filter by","bluehost-wordpress-plugin"),onChange:function(e){return g(e)},options:["Websites","Marketing","Business"]}),Object(s.createElement)(F,{cache:L})))},W=c(352),q=c.n(W),I=(c(406),c(353)),P=c.n(I);t.default=function(){return Object(s.createElement)(a.a,{className:"page-help"},Object(s.createElement)("div",{className:"clouds"},Object(s.createElement)("div",{className:"section-intro"},Object(s.createElement)("div",{className:"chat-button-container"},Object(s.createElement)(r.a,{className:"chat-button",href:Object(n.a)("https://helpchat.bluehost.com/",{utm_content:"help_chat_button",utm_term:"Chat with us"}),isPrimary:!0,rel:"noopener noreferrer",target:"_blank"},Object(o.__)("Chat with us","bluehost-wordpress-plugin")," ",Object(s.createElement)(l.h,{className:"chat-icon"}))),Object(s.createElement)("h2",{className:"section-title"},Object(o.__)("From DIY to full-service help","bluehost-wordpress-plugin")),Object(s.createElement)("p",{className:"section-description"},Object(o.__)("Feeling stuck? Choose how much help you'd like, from how-to articles to your own website concierge.","bluehost-wordpress-plugin"))),Object(s.createElement)("div",{className:"section-blue-sky"},Object(s.createElement)("div",{className:"section-title"},Object(s.createElement)(l.d,null),Object(s.createElement)("span",{className:"screen-reader-text"},Object(o.__)("Blue Sky","bluehost-wordpress-plugin"))),Object(s.createElement)("div",{className:"media-block"},Object(s.createElement)("div",{className:"media-block__media"},Object(s.createElement)("div",{className:"react-player-container"},Object(s.createElement)(P.a,{className:"react-player",height:"100%",light:q.a,playIcon:Object(s.createElement)("span",null),url:"https://www.youtube.com/embed/QEir4T7VweY",width:"100%"}))),Object(s.createElement)("div",{className:"media-block__details"},Object(s.createElement)("div",{className:"media-block__title"},Object(o.__)("Get your own website guide","bluehost-wordpress-plugin")),Object(s.createElement)("div",{className:"media-block__description"},Object(o.__)("Our WordPress experts can jump in wherever you need help, teaching you how to build, grow, and maintain your website.","bluehost-wordpress-plugin")),Object(s.createElement)(r.a,{className:"media-block__button",href:"#/blue-sky",isSecondary:!0,onClick:function(){window.scrollTo(0,0)}},Object(o.__)("Get Blue Sky","bluehost-wordpress-plugin")))))),Object(s.createElement)("div",{className:"section-featured-services"},Object(s.createElement)("div",{className:"section-title"},Object(o.__)("Let us do it for you","bluehost-wordpress-plugin")),Object(s.createElement)("p",{className:"section-description"},Object(o.__)("What can we help you achieve today?","bluehost-wordpress-plugin")),Object(s.createElement)("div",{className:"featured-services"},Object(s.createElement)("div",{className:"featured-services-list"},Object(s.createElement)("div",{className:"featured-service"},Object(s.createElement)("div",{className:"featured-service__image"},Object(s.createElement)(l.j,null)),Object(s.createElement)("div",{className:"featured-service__title"},Object(o.__)("Full-Service Website","bluehost-wordpress-plugin")),Object(s.createElement)("div",{className:"featured-service__description"},Object(o.__)("Ongoing marketing assistance and design","bluehost-wordpress-plugin")),Object(s.createElement)(r.a,{className:"featured-service__button","data-testid":"full-service",href:"https://www.bluehost.com/solutions/full-service#full-service",isSecondary:!0,utmContent:"help_full_service"},Object(o.__)("Learn more","bluehost-wordpress-plugin"))),Object(s.createElement)("div",{className:"featured-service"},Object(s.createElement)("div",{className:"featured-service__image"},Object(s.createElement)(l.C,null)),Object(s.createElement)("div",{className:"featured-service__title"},Object(o.__)("SEO Services","bluehost-wordpress-plugin")),Object(s.createElement)("div",{className:"featured-service__description"},Object(o.__)("Fine tune your website for better visibility","bluehost-wordpress-plugin")),Object(s.createElement)(r.a,{className:"featured-service__button","data-testid":"seo-services",href:"https://www.bluehost.com/solutions/full-service#seo-services",isSecondary:!0,utmContent:"help_seo_services"},Object(o.__)("Learn more","bluehost-wordpress-plugin"))),Object(s.createElement)("div",{className:"featured-service"},Object(s.createElement)("div",{className:"featured-service__image"},Object(s.createElement)(l.g,null)),Object(s.createElement)("div",{className:"featured-service__title"},Object(o.__)("Our experts can help","bluehost-wordpress-plugin")),Object(s.createElement)("div",{className:"featured-service__description"},Object(o.__)("Consult with an expert to figure out the best next steps.","bluehost-wordpress-plugin")),Object(s.createElement)(r.a,{className:"featured-service__button",href:"https://www.bluehost.com/solutions/full-service#request-form",isSecondary:!0,utmContent:"help_request_consultation"},Object(o.__)("Request a consultation","bluehost-wordpress-plugin")))))),Object(s.createElement)("div",{className:"section-resources"},Object(s.createElement)("div",{className:"section-title"},Object(o.__)("DIY","bluehost-wordpress-plugin")),Object(s.createElement)("p",{className:"section-description"},Object(o.__)("Checkout our resource center for helpful how-to articles and guides.","bluehost-wordpress-plugin")),Object(s.createElement)("div",{className:"resources-search"},Object(s.createElement)(R,null),Object(s.createElement)("div",{className:"button-container"},Object(s.createElement)(r.a,{href:"https://www.bluehost.com/resources/",isSecondary:!0,utmContent:"help_visit_resource_center"},Object(o.__)("Visit resource center","bluehost-wordpress-plugin"))))),Object(s.createElement)("footer",{className:"help-footer"},Object(s.createElement)("a",{className:"call-to-action",href:"tel:8884014678"},Object(s.createElement)(l.f,{className:"footer-icon"}),Object(s.createElement)("span",null,Object(o.__)("888-401-4678","bluehost-wordpress-plugin"))),Object(s.createElement)("a",{className:"call-to-action",href:Object(n.a)("https://helpchat.bluehost.com/",{utm_content:"help_chat_link",utm_term:"Chat with us"})},Object(s.createElement)(l.h,{className:"footer-icon"}),Object(s.createElement)("span",null,Object(o.__)("Chat with us","bluehost-wordpress-plugin")))))}}}]);
(function(){
  var d=document;d.documentElement.classList.remove('no-js');
  var h=d.querySelector('.header'),t=d.querySelector('.to-top');
  function sc(){var y=window.scrollY;if(h)h.classList.toggle('scrolled',y>10);if(t)t.classList.toggle('show',y>600)}
  window.addEventListener('scroll',sc,{passive:true});sc();
  if(t)t.addEventListener('click',function(){window.scrollTo({top:0,behavior:'smooth'})});
  var mt=d.querySelector('.menu-toggle'),nav=d.querySelector('.nav');
  function closeNav(){if(nav&&nav.classList.contains('open')){nav.classList.remove('open');mt.setAttribute('aria-expanded','false');d.body.style.overflow=''}}
  if(mt)mt.addEventListener('click',function(){var o=nav.classList.toggle('open');mt.setAttribute('aria-expanded',o);d.body.style.overflow=o?'hidden':''});
  // ---- mobile dropdown (accordion) for sub-menus ----
  var mq=window.matchMedia('(max-width:1180px)');
  var subs=[].slice.call(d.querySelectorAll('.nav .has-sub'));
  function setSub(li,open){li.classList.toggle('sub-open',open);var a=li.firstElementChild;if(a)a.setAttribute('aria-expanded',open)}
  subs.forEach(function(li){
    var a=li.firstElementChild,sub=li.querySelector('.sub');if(!a||!sub)return;
    a.setAttribute('aria-haspopup','true');a.setAttribute('aria-expanded','false');
    var c=d.createElement('span');c.className='caret';c.setAttribute('aria-hidden','true');a.appendChild(c);
    if(!sub.querySelector('.sub-all')){var all=d.createElement('li');all.className='sub-all';
      all.innerHTML='<a href="'+a.getAttribute('href')+'">All '+a.textContent.trim()+'</a>';sub.insertBefore(all,sub.firstChild)}
    var cur=(location.pathname.split('/').pop()||'index.html');
    var here=[].slice.call(sub.querySelectorAll('a')).filter(function(x){return x.getAttribute('href')===cur})[0];
    if(here){here.classList.add('active');if(mq.matches)setSub(li,true)}
  });
  function closeSubs(){subs.forEach(function(li){setSub(li,false)})}
  if(nav)nav.addEventListener('click',function(e){
    var a=e.target.closest('a');if(!a)return;
    var li=a.parentElement;
    if(mq.matches&&li.classList.contains('has-sub')&&a===li.firstElementChild){
      e.preventDefault();var open=!li.classList.contains('sub-open');closeSubs();setSub(li,open);return;
    }
    closeNav();
  });
  d.addEventListener('keydown',function(e){if(e.key==='Escape')closeNav()});
  window.addEventListener('resize',function(){if(window.innerWidth>960)closeNav()});
  // scroll animations (AOS)
  if(window.AOS){
    AOS.init({duration:850,easing:'ease-out-cubic',once:true,offset:70,
      disable:window.matchMedia('(prefers-reduced-motion: reduce)').matches});
  }else{d.documentElement.classList.add('aos-off')}
  // gallery filter
  var fb=d.querySelectorAll('.filters button');
  fb.forEach(function(b){b.addEventListener('click',function(){
    fb.forEach(function(x){x.classList.remove('on')});b.classList.add('on');
    var f=b.getAttribute('data-f');
    d.querySelectorAll('.tile').forEach(function(tl){tl.classList.toggle('hide',f!=='all'&&tl.getAttribute('data-c')!==f)});
  })});
  // enquiry form -> email / WhatsApp (static site, no backend required)
  var form=d.querySelector('form.enquiry');
  if(form){
    function body(){
      var g=function(n){return (form.elements[n]&&form.elements[n].value||'').trim()};
      return {name:g('name'),email:g('email'),phone:g('phone'),type:g('type'),date:g('date'),guests:g('guests'),msg:g('message')};
    }
    function text(b){return 'Hello Crown & Crest Event Management,\n\nName: '+b.name+'\nEmail: '+b.email+'\nPhone: '+b.phone+'\nEvent type: '+b.type+'\nPreferred date: '+b.date+'\nGuests: '+b.guests+'\n\n'+b.msg}
    form.addEventListener('submit',function(e){
      e.preventDefault();
      if(!form.checkValidity()){form.reportValidity();return}
      var b=body();
      location.href='mailto:'+form.getAttribute('data-mail')+'?subject='+encodeURIComponent('Event enquiry: '+(b.type||'General')+' - '+b.name)+'&body='+encodeURIComponent(text(b));
      d.querySelector('.form-msg').textContent='Opening your email app with the enquiry ready to send. Thank you!';
    });
    var wa=d.querySelector('[data-wa]');
    if(wa)wa.addEventListener('click',function(){
      if(!form.checkValidity()){form.reportValidity();return}
      window.open('https://wa.me/'+form.getAttribute('data-wa')+'?text='+encodeURIComponent(text(body())),'_blank','noopener');
    });
  }
})();

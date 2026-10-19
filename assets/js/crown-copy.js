(function(){
  var d=document;d.documentElement.classList.remove('no-js');
  var h=d.querySelector('.header'),t=d.querySelector('.to-top');
  function sc(){var y=window.scrollY;if(h)h.classList.toggle('scrolled',y>10);if(t)t.classList.toggle('show',y>600)}
  window.addEventListener('scroll',sc,{passive:true});sc();
  if(t)t.addEventListener('click',function(){window.scrollTo({top:0,behavior:'smooth'})});
  var mt=d.querySelector('.menu-toggle'),nav=d.querySelector('.nav');
  if(mt)mt.addEventListener('click',function(){var o=nav.classList.toggle('open');mt.setAttribute('aria-expanded',o)});
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

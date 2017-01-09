/* jQuery livequery Version: 1.1.1 */
!function(e){e.extend(e.fn,{livequery:function(i,t,u){var n,r=this;return e.isFunction(i)&&(u=t,t=i,i=void 0),e.each(e.livequery.queries,function(e,s){return r.selector!=s.selector||r.context!=s.context||i!=s.type||t&&t.$lqguid!=s.fn.$lqguid||u&&u.$lqguid!=s.fn2.$lqguid?void 0:(n=s)&&!1}),n=n||new e.livequery(this.selector,this.context,i,t,u),n.stopped=!1,n.run(),this},expire:function(i,t,u){var n=this;return e.isFunction(i)&&(u=t,t=i,i=void 0),e.each(e.livequery.queries,function(r,s){n.selector!=s.selector||n.context!=s.context||i&&i!=s.type||t&&t.$lqguid!=s.fn.$lqguid||u&&u.$lqguid!=s.fn2.$lqguid||this.stopped||e.livequery.stop(s.id)}),this}}),e.livequery=function(i,t,u,n,r){return this.selector=i,this.context=t,this.type=u,this.fn=n,this.fn2=r,this.elements=[],this.stopped=!1,this.id=e.livequery.queries.push(this)-1,n.$lqguid=n.$lqguid||e.livequery.guid++,r&&(r.$lqguid=r.$lqguid||e.livequery.guid++),this},e.livequery.prototype={stop:function(){var e=this;this.type?this.elements.unbind(this.type,this.fn):this.fn2&&this.elements.each(function(i,t){e.fn2.apply(t)}),this.elements=[],this.stopped=!0},run:function(){if(!this.stopped){var i=this,t=this.elements,u=e(this.selector,this.context),n=u.not(t);this.elements=u,this.type?(n.bind(this.type,this.fn),t.length>0&&e.each(t,function(t,n){e.inArray(n,u)<0&&e.event.remove(n,i.type,i.fn)})):(n.each(function(){i.fn.apply(this)}),this.fn2&&t.length>0&&e.each(t,function(t,n){e.inArray(n,u)<0&&i.fn2.apply(n)}))}}},e.extend(e.livequery,{guid:0,queries:[],queue:[],running:!1,timeout:null,checkQueue:function(){if(e.livequery.running&&e.livequery.queue.length)for(var i=e.livequery.queue.length;i--;)e.livequery.queries[e.livequery.queue.shift()].run()},pause:function(){e.livequery.running=!1},play:function(){e.livequery.running=!0,e.livequery.run()},registerPlugin:function(){e.each(arguments,function(i,t){if(e.fn[t]){var u=e.fn[t];e.fn[t]=function(){var i=u.apply(this,arguments);return e.livequery.run(),i}}})},run:function(i){void 0!=i?e.inArray(i,e.livequery.queue)<0&&e.livequery.queue.push(i):e.each(e.livequery.queries,function(i){e.inArray(i,e.livequery.queue)<0&&e.livequery.queue.push(i)}),e.livequery.timeout&&clearTimeout(e.livequery.timeout),e.livequery.timeout=setTimeout(e.livequery.checkQueue,20)},stop:function(i){void 0!=i?e.livequery.queries[i].stop():e.each(e.livequery.queries,function(i){e.livequery.queries[i].stop()})}}),e.livequery.registerPlugin("append","prepend","after","before","wrap","attr","removeAttr","addClass","removeClass","toggleClass","empty","remove","html"),e(function(){e.livequery.play()})}(jQuery);

(function($) {
	var utils= {
		init: function() {
			this.ui.init();
		},
		
		ui: {
			init: function() {
				utils.ui.sidebar();
			},
			
			sidebar: function() {
				if(!$('#sidebar .main-menu')[0]) return;

				$('#sidebar .main-menu .dropdown > a').livequery('click',function(e){
					var $this = $(this);
					$this.parent().toggleClass('active');
					$this.parent().find('> ul').slideToggle();
					e.preventDefault();
				});
			}
	
		}
	}
	$(document).ready(function() { utils.init(); });
})(jQuery);
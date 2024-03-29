function comSlider1480221() { 
var self = this; 
var g_HostRoot = "";
var g_TransitionTimeoutRef = null;
var g_CycleTimeout = 10;
var g_currFrame = 0;
var g_currDate = new Date(); var g_currTime = g_currDate.getTime();var g_microID = g_currTime + '-' + Math.floor((Math.random()*1000)+1); 
var g_InTransition = 0;var g_Navigation = 0;this.getCurrMicroID = function() { return g_microID; } 
var g_kb = new Array();
var g_kbsupported = true;
var isOldIE = navigator.userAgent.indexOf('MSIE 6')>=0 || navigator.userAgent.indexOf('MSIE 7')>=0 || navigator.userAgent.indexOf('MSIE 8')>=0;if (isOldIE) {g_kbsupported = false;}    this.kenburns = function(options) {     
								if (!g_kbsupported)
									return null; 				
                                var ctx = jqCS1480221("#"+options.name)[0].getContext('2d');
                                var thisobj = this;

                                var start_time = 0;
                                                            //var width = $thiscanvas.width();
                                                            //var height = $thiscanvas.height();	
                                                            var width = options.width;
                                                            var height = options.height;	


                                var image_path = options.image;		
                                var display_time = options.display_time || 7000;
                                var fade_time = options.fade_time || 0;
                                var fade_called = false;
                                var frames_per_second = options.frames_per_second || 30;		
                                var frame_time = (1 / frames_per_second) * 1000;
                                var zoom_level = 1 / (options.zoom || 2);
                                var clear_color = options.background_color || '#000000';	

                                var onstop = null;
                                var onloaded = null;
                                var onfade = null;

                                var timer_ref = null;
                                var images = [];
															
                                images.push({path:image_path,
                                                        initialized:false,
                                                        loaded:false});
                                function get_time() {
                                        var d = new Date();
                                        return d.getTime() - start_time;
                                }

                                function interpolate_point(x1, y1, x2, y2, i) {
                                        // Finds a point between two other points
                                        return  {x: x1 + (x2 - x1) * i,
                                                        y: y1 + (y2 - y1) * i}
                                }

                                function interpolate_rect(r1, r2, i) {
                                        // Blend one rect in to another
                                        var p1 = interpolate_point(r1[0], r1[1], r2[0], r2[1], i);
                                        var p2 = interpolate_point(r1[2], r1[3], r2[2], r2[3], i);
                                        return [p1.x, p1.y, p2.x, p2.y];
                                }

                                function scale_rect(r, scale) {
                                        // Scale a rect around its center
                                        var w = r[2] - r[0];
                                        var h = r[3] - r[1];
                                        var cx = (r[2] + r[0]) / 2;
                                        var cy = (r[3] + r[1]) / 2;
                                        var scalew = w * scale;
                                        var scaleh = h * scale;
                                        return [cx - scalew/2,
                                                        cy - scaleh/2,
                                                        cx + scalew/2,
                                                        cy + scaleh/2];		
                                }

                                function fit(src_w, src_h, dst_w, dst_h) {
                                        // Finds the best-fit rect so that the destination can be covered
                                        var src_a = src_w / src_h;
                                        var dst_a = dst_w / dst_h;			
                                        var w = src_h * dst_a;
                                        var h = src_h;						
                                        if (w > src_w)
                                        {
                                                var w = src_w;
                                                var h = src_w / dst_a;
                                        }						
                                        var x = (src_w - w) / 2;
                                        var y = (src_h - h) / 2;
                                        return [x, y, x+w, y+h]; 
                                }				

                                function get_image_info() {
                                        // Gets information structure for a given index
                                        // Also loads the image asynchronously, if required		
                                        var image_info = images[0];
                                        if (!image_info.initialized) {
                                                var image = new Image();
                                                image_info.image = image;
                                                image_info.loaded = false;
                                                image.onload = function(){
                                                        image_info.loaded = true;
                                                        var iw = image.width;
                                                        var ih = image.height;

                                                        var r1 = fit(iw, ih, width, height);;
                                                        var r2 = scale_rect(r1, zoom_level);

                                                        var align_x = Math.floor(Math.random() * 3) - 1;
                                                        var align_y = Math.floor(Math.random() * 3) - 1;
                                                        align_x /= 2;
                                                        align_y /= 2;

                                                        var x = r2[0];
                                                        r2[0] += x * align_x;
                                                        r2[2] += x * align_x; 

                                                        var y = r2[1];
                                                        r2[1] += y * align_y;
                                                        r2[3] += y * align_y;
											
													image_info.r1 = r1;
													image_info.r2 = r2;								
															       if (options.onloaded) {
                                                                options.onloaded(thisobj);
                                                        }					

                                                }				
                                                image_info.initialized = true;
                                                image.src = image_info.path;
                                        }
                                        return image_info;
                                }

                                function render_image(image_index, anim) {
                                        // Renders a frame of the effect	
                                        if (anim > 1) {
                                                return;
                                        } 									
                                        var image_info = get_image_info();
                                        if (image_info.loaded) {						
                                                var r = interpolate_rect(image_info.r1, image_info.r2, anim);

                                                ctx.save();
                                                ctx.globalAlpha = 1;
                                                ctx.drawImage(image_info.image, r[0], r[1], r[2] - r[0], r[3] - r[1], 0, 0, width, height);
                                                ctx.restore();

                                        }
                                }				

                                function clear() {
                                        // Clear the canvas
                                        ctx.save();
                                        ctx.globalAlpha = 1;
                                        ctx.fillStyle = clear_color;
                                        ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);
                                        ctx.restore();
                                }


                                function update() {

                                        // Render the next frame										
                                        var time_passed = get_time();	

                                        render_image(0, time_passed / display_time/*, time_passed / fade_time*/);			

                                        if ((fade_time > 0) && (fade_called == false) && ((display_time - time_passed) <= fade_time))
                                        {
                                                if (options.onfade) {
                                                        options.onfade(thisobj, display_time - time_passed);	
                                                }					
                                                fade_called = true;					
                                        }

                                        if (time_passed >= display_time)
                                        {
                                                thisobj.stop();
                                                return;
                                        }
                                }

                                this.stop = function()
                                {
                                        if (timer_ref != null)
                                                clearInterval(timer_ref);
                                        timer_ref = null;
                                        //clear();
                                        images[0].initialized = null;			
                                        if (options.onstop) {
                                                options.onstop(thisobj);
                                        }
                                }

                                this.start = function()
                                {
                                        fade_called = false;		
                                        start_time = 0;
                                        start_time = get_time();	
                                        timer_ref = setInterval(update, frame_time);	
                                }

                                get_image_info();	
                                return this;	
                        }	
               this.setNavStyle = function(id, background, color, border, type)
{
 if (background == "")
 {
     jqCS1480221("#comSNavigation1480221_"+id).css("background", "none");
 }
 else if (background == "transparent")
 {
     jqCS1480221("#comSNavigation1480221_"+id).css("background", "transparent");
 }
 else
 {
     jqCS1480221("#comSNavigation1480221_"+id).css("background", "#"+background);
 }
 if (color != "") { jqCS1480221("#comSNavigation1480221_"+id).css("color", "#"+color); }
 if (color != "") { jqCS1480221("#comSNavigation1480221_"+id).css("border", border+"px solid #"+color); } else { jqCS1480221("#comSNavigation1480221_"+id).css("border-width", "0px"); }
 var margin = (-1)*border;
 jqCS1480221("#comSNavigation1480221_"+id).css("margin-top", margin+"px");
 jqCS1480221("#comSNavigation1480221_"+id).css("margin-left", margin+"px");
 if (type == 0)
 {
   jqCS1480221("#comImgBullet1480221_"+id).show();
   jqCS1480221("#comImgBulletcurr1480221_"+id).hide();
 }
 else
 {
   jqCS1480221("#comImgBulletcurr1480221_"+id).show();
   jqCS1480221("#comImgBullet1480221_"+id).hide();
 }
}
this.targetClearTimeouts = function()
{
 if (g_TransitionTimeoutRef != null)     { window.clearTimeout(g_TransitionTimeoutRef); g_TransitionTimeoutRef = null;}
}
this.getNextFrame = function()
{
 var ret = g_currFrame;
 ret++;
 if (ret == 3) {ret = 0;}
 return ret;
}
this.getPrevFrame = function()
{
 var ret = g_currFrame;
 ret--;
 if (ret < 0) {ret = (3-1);}
 return ret;
}
this.stopAll = function()
{
jqCS1480221("#comSFrame1480221_0").stop(true, true);
jqCS1480221("#comSFrameSek1480221_0").stop(true, true);
jqCS1480221("#comSFrame1480221_1").stop(true, true);
jqCS1480221("#comSFrameSek1480221_1").stop(true, true);
jqCS1480221("#comSFrame1480221_2").stop(true, true);
jqCS1480221("#comSFrameSek1480221_2").stop(true, true);
}
this.switchFrame = function()
{
     g_Navigation = 1;
     var currFrame=g_currFrame;
     g_currFrame = self.getNextFrame();
     self.switchFromToFrame(currFrame, g_currFrame);
}
 
this.switchFramePrev = function()
{
     g_Navigation = 0;
     var currFrame=g_currFrame;
     g_currFrame = self.getPrevFrame();
     self.switchFromToFrame(currFrame, g_currFrame);
}
 
this.switchToFrame = function(toFrame)
{
     if ((g_InTransition == 1) || (g_currFrame == toFrame))
     {
         if (g_currFrame == toFrame) { return false; }
         self.stopAll();
     }
     var currFrame=g_currFrame;
     g_currFrame=toFrame;
     if (currFrame < g_currFrame)
         g_Navigation = 0;
     else
         g_Navigation = 1;
     self.switchFromToFrame(currFrame, g_currFrame);
}
 
this.switchFromToFrame =  function(currFrame, toFrame)
{
     if (g_InTransition == 1)
     {
         self.stopAll();
     }
g_InTransition = 1;
self.startTransitionTimer();
if (g_kb.length > toFrame)
	g_kb[toFrame].start();
     jqCS1480221("#comSFrameSek1480221_"+currFrame+"").css("z-index", 1);
     jqCS1480221("#comSFrameSek1480221_"+toFrame+"").css("z-index", 2);
     jqCS1480221("#comSFrameSek1480221_"+toFrame+"").hide().fadeIn(720, function() { 
if (g_microID !=objcomSlider1480221.getCurrMicroID()){return false;};jqCS1480221("#comSFrame1480221_"+currFrame).hide(); g_InTransition = 0;
 } ); 
 self.setNavStyle(currFrame, 'CCCCCC','555555',0, 0); self.setNavStyle(toFrame, 'EEEEEE','333333',0, 1);     jqCS1480221("#comSFrame1480221_"+toFrame).show(1, function(){  });
if (g_kb.length > currFrame)
	g_kb[currFrame].stop();
     
     
     
     
}
this.startTransitionTimer = function()
{
  self.targetClearTimeouts(); g_TransitionTimeoutRef = window.setTimeout(function() {objcomSlider1480221.onTransitionTimeout(g_microID)}, g_CycleTimeout*1000);
}
this.onTransitionTimeout = function(microID)
{
   if (g_microID != microID) { return false; }
     self.switchFrame();
}
this.initFrame = function()
{
g_currFrame = 0;
self.startTransitionTimer();
if (g_kb.length)
    g_kb[0].start();
  jqCS1480221("#comSFrame1480221_"+g_currFrame).show(1, function(){if (g_microID !=objcomSlider1480221.getCurrMicroID()){return false;};self.setNavStyle(g_currFrame, 'EEEEEE','333333',0, 1);     });
  return true;
}

					this.scriptLoaded = function(options)
					{
				
						if ((typeof options == "undefined") || ((typeof options != "undefined") && (typeof options.fontsloaded != "undefined") && (options.fontsloaded == false)))
						{
							var thiz = this;
							if (typeof WebFont$1480221 != "undefined")
							{
								WebFont$1480221.load({
								google: { families: ['Titillium Web::latin,latin-ext'] },
								active: function(){	
										thiz.scriptLoaded({fontsloaded: true});						
									},
								inactive: function(){}									
								});									
								return false;
							}
							else
							{
								var loadRetries = 3;
								if ((typeof options != "undefined") && (typeof options.loadRetries != "undefined"))
									loadRetries = options.loadRetries;
								if (loadRetries > 0)
								{
									setTimeout(function(){thiz.scriptLoaded({fontsloaded: false, loadRetries: (loadRetries-1)});}, (4-loadRetries)*100);									
									return false;
								}
							}
						}
					   jqCS1480221 = jQuery1480221.noConflict(false);jqCS1480221("#comslider_in_point_1480221").html('<div id="comSWrapper1480221_" name="comSWrapper1480221_" style="display: inline-block; text-align: center; border:0px; width:1920px; height:782px; position: relative; top: 0px; left: 0px;"><div id="comSWrapper1480221_" name="comSWrapper1480221_" style="overflow:hidden;border:0px; width:1920px; height:782px; "><div id="comSFrameWrapper1480221_" name="comSFrameWrapper1480221_" style="position: absolute; top: 0px; left: 0px;"><div id="comSFrame1480221_0" name="comSFrame1480221_0" style="position:absolute; top:0px; left:0px; width:1920px; height:782px;"><div id="comSFrameSek1480221_0" name="comSFrameSek1480221_0" style="position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"><div id="comSImg1480221_0" name="comSImg1480221_0" style="position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"><canvas id="kenburns1480221_0" width="1920" height="782"></canvas></div><div id="comSHtml1480221__bk0" name="comSHtml1480221__bk0" style="background: #000000; position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"></div><script type="text/javascript"> jqCS1480221("#comSHtml1480221__bk0").fadeTo(0,0.2);</script><div id="comSHtml1480221_0" name="comSHtml1480221_0" style="padding:10px; background: transparent; position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"><h1 style="text-align: center;"><span style="color:#FFFFFF"><span style="font-family:titillium web"><big>the best coupons Over 20 000+ deals. Grab one now!</big></span></span></h1></div></div></div><div id="comSFrame1480221_1" name="comSFrame1480221_1" style="position:absolute; top:0px; left:0px; width:1920px; height:782px;"><div id="comSFrameSek1480221_1" name="comSFrameSek1480221_1" style="position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"><div id="comSImg1480221_1" name="comSImg1480221_1" style="position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"><canvas id="kenburns1480221_1" width="1920" height="782"></canvas></div><div id="comSHtml1480221__bk1" name="comSHtml1480221__bk1" style="background: #000000; position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"></div><script type="text/javascript"> jqCS1480221("#comSHtml1480221__bk1").fadeTo(0,0.2);</script><div id="comSHtml1480221_1" name="comSHtml1480221_1" style="padding:10px; background: transparent; position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"><h1 style="text-align: center;"><span style="color:#FFFFFF"><span style="font-family:titillium web"><big>the best coupons Over 20 000+ deals. Grab one now!</big></span></span></h1></div></div></div><div id="comSFrame1480221_2" name="comSFrame1480221_2" style="position:absolute; top:0px; left:0px; width:1920px; height:782px;"><div id="comSFrameSek1480221_2" name="comSFrameSek1480221_2" style="position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"><div id="comSImg1480221_2" name="comSImg1480221_2" style="position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"><canvas id="kenburns1480221_2" width="1920" height="782"></canvas></div><div id="comSHtml1480221__bk2" name="comSHtml1480221__bk2" style="background: #000000; position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"></div><script type="text/javascript"> jqCS1480221("#comSHtml1480221__bk2").fadeTo(0,0.2);</script><div id="comSHtml1480221_2" name="comSHtml1480221_2" style="padding:10px; background: transparent; position:absolute; overflow:hidden; top:0px; left:0px; width:1920px; height:782px;"><h1 style="text-align: center;"><span style="color:#FFFFFF"><span style="font-family:titillium web"><big>the best coupons Over 20 000+ deals. Grab one now!</big></span></span></h1></div></div></div></div><a name="0" style="cursor:pointer; text-decoration:none !important; font-size:16px;" href=""><div id="comSNavigation1480221_0" name="comSNavigation1480221_0" style="margin-left:0px; margin-top:0px; border: 0px solid #555555; position:absolute; height:20px; width:20px; top:757px; left:925px; z-index: 5; text-align: center; vertical-align:bottom;  color: #555555;background: #CCCCCC; "><div id="height_workaround" style="font-size:1px;line-height:0;height:20px;">&nbsp;</div></div></a><script type="text/javascript"> jqCS1480221("#comSNavigation1480221_0").fadeTo(0,0.8);</script><a name="1" style="cursor:pointer; text-decoration:none !important; font-size:16px;" href=""><div id="comSNavigation1480221_1" name="comSNavigation1480221_1" style="margin-left:0px; margin-top:0px; border: 0px solid #555555; position:absolute; height:20px; width:20px; top:757px; left:950px; z-index: 5; text-align: center; vertical-align:bottom;  color: #555555;background: #CCCCCC; "><div id="height_workaround" style="font-size:1px;line-height:0;height:20px;">&nbsp;</div></div></a><script type="text/javascript"> jqCS1480221("#comSNavigation1480221_1").fadeTo(0,0.8);</script><a name="2" style="cursor:pointer; text-decoration:none !important; font-size:16px;" href=""><div id="comSNavigation1480221_2" name="comSNavigation1480221_2" style="margin-left:0px; margin-top:0px; border: 0px solid #555555; position:absolute; height:20px; width:20px; top:757px; left:975px; z-index: 5; text-align: center; vertical-align:bottom;  color: #555555;background: #CCCCCC; "><div id="height_workaround" style="font-size:1px;line-height:0;height:20px;">&nbsp;</div></div></a><script type="text/javascript"> jqCS1480221("#comSNavigation1480221_2").fadeTo(0,0.8);</script></div><div id="comSNavigationControl1480221__back" name="comSNavigationControl1480221__back" style=" cursor: pointer; margin: 0px; margin-left:0px; border: 0px; position:absolute; height:32px; width:32px; top:375px; left:0px; z-index: 6; text-align: center; vertical-align:bottom;  background-color: transparent; "><img class="def" style="position: absolute; top: 0px; left: 0px; border: 0px;" src="comslider1480221/imgnavctl/defback.png?1515202735" /></div><script type="text/javascript"> jqCS1480221("#comSNavigationControl1480221__back").bind(\'click\', function() { objcomSlider1480221.switchFramePrev(); });</script><div id="comSNavigationControl1480221__forward" name="comSNavigationControl1480221__forward" style=" cursor: pointer; margin: 0px; margin-left:0px; border: 0px; position:absolute; height:32px; width:32px; top:375px; left:1888px; z-index: 6; text-align: center; vertical-align:bottom; background-color: transparent; "><img class="def" style="position: absolute; top: 0px; left: 0px; border: 0px;" src="comslider1480221/imgnavctl/defforward.png?1515202735" /></div><script type="text/javascript"> jqCS1480221("#comSNavigationControl1480221__forward").bind(\'click\', function() { objcomSlider1480221.switchFrame(); });</script></div>');
                    jqCS1480221("#comslider_in_point_1480221 a").bind('click',  function() { if ((this.name.length > 0) && (isNaN(this.name) == false)) {  self.switchToFrame(parseInt(this.name)); return false;} });
                
				
						if (g_kbsupported == true)						
						{				
							g_kb[0] = new self.kenburns({
									name: 'kenburns1480221_0',
									width: 1920,
									height: 782,
image:'comslider1480221/img/180106060006101.jpg?1515202735',
     frames_per_second: 30,
									display_time: 1800, 
									fade_time: 0,
									zoom: 1.5,
									background_color:'#ffffff',
									onstop:function(kenburnsobj) { },
									onloaded:function(kenburnsobj) { },
									onfade:function(kenburnsobj, timeleft) { }
							});						
						}
						else
						{
							jqCS1480221("#comSImg1480221_0").html('<img src="http://commondatastorage.googleapis.com/comslider/target/users/1515198572x25224d466510b037500bcbdf34c021c7/img/180106060006101.jpg?1515202735"/>');						
						}

				
						if (g_kbsupported == true)						
						{				
							g_kb[1] = new self.kenburns({
									name: 'kenburns1480221_1',
									width: 1920,
									height: 782,
image:'comslider1480221/img/180106060006102.jpg?1515202735',
     frames_per_second: 30,
									display_time: 1800, 
									fade_time: 0,
									zoom: 1.5,
									background_color:'#ffffff',
									onstop:function(kenburnsobj) { },
									onloaded:function(kenburnsobj) { },
									onfade:function(kenburnsobj, timeleft) { }
							});						
						}
						else
						{
							jqCS1480221("#comSImg1480221_1").html('<img src="http://commondatastorage.googleapis.com/comslider/target/users/1515198572x25224d466510b037500bcbdf34c021c7/img/180106060006102.jpg?1515202735"/>');						
						}
jqCS1480221("#comSFrame1480221_1").hide();

				
						if (g_kbsupported == true)						
						{				
							g_kb[2] = new self.kenburns({
									name: 'kenburns1480221_2',
									width: 1920,
									height: 782,
image:'comslider1480221/img/180106060006103.jpg?1515202735',
     frames_per_second: 30,
									display_time: 1800, 
									fade_time: 0,
									zoom: 1.5,
									background_color:'#ffffff',
									onstop:function(kenburnsobj) { },
									onloaded:function(kenburnsobj) { },
									onfade:function(kenburnsobj, timeleft) { }
							});						
						}
						else
						{
							jqCS1480221("#comSImg1480221_2").html('<img src="http://commondatastorage.googleapis.com/comslider/target/users/1515198572x25224d466510b037500bcbdf34c021c7/img/180106060006103.jpg?1515202735"/>');						
						}
jqCS1480221("#comSFrame1480221_2").hide();
self.initFrame();

}
var g_CSIncludes = new Array();
var g_CSLoading = false;
var g_CSCurrIdx = 0; 
 this.include = function(src, last) 
                {
                    if (src != '')
                    {				
                            var tmpInclude = Array();
                            tmpInclude[0] = src;
                            tmpInclude[1] = last;					
                            //
                            g_CSIncludes[g_CSIncludes.length] = tmpInclude;
                    }            
                    if ((g_CSLoading == false) && (g_CSCurrIdx < g_CSIncludes.length))
                    {


                            var oScript = null;
                            if (g_CSIncludes[g_CSCurrIdx][0].split('.').pop() == 'css')
                            {
                                oScript = document.createElement('link');
                                oScript.href = g_CSIncludes[g_CSCurrIdx][0];
                                oScript.type = 'text/css';
                                oScript.rel = 'stylesheet';

                                oScript.onloadDone = true; 
                                g_CSLoading = false;
                                g_CSCurrIdx++;								
                                if (g_CSIncludes[g_CSCurrIdx-1][1] == true) 
                                        self.scriptLoaded(); 
                                else
                                        self.include('', false);
                            }
                            else
                            {
                                oScript = document.createElement('script');
                                oScript.src = g_CSIncludes[g_CSCurrIdx][0];
                                oScript.type = 'text/javascript';

                                //oScript.onload = scriptLoaded;
                                oScript.onload = function() 
                                { 
                                        if ( ! oScript.onloadDone ) 
                                        {
                                                oScript.onloadDone = true; 
                                                g_CSLoading = false;
                                                g_CSCurrIdx++;								
                                                if (g_CSIncludes[g_CSCurrIdx-1][1] == true) 
                                                        self.scriptLoaded(); 
                                                else
                                                        self.include('', false);
                                        }
                                };
                                oScript.onreadystatechange = function() 
                                { 
                                        if ( ( "loaded" === oScript.readyState || "complete" === oScript.readyState ) && ! oScript.onloadDone ) 
                                        {
                                                oScript.onloadDone = true;
                                                g_CSLoading = false;	
                                                g_CSCurrIdx++;
                                                if (g_CSIncludes[g_CSCurrIdx-1][1] == true) 
                                                        self.scriptLoaded(); 
                                                else
                                                        self.include('', false);
                                        }
                                }
                                
                            }
                            //
                            document.getElementsByTagName("head").item(0).appendChild(oScript);
                            //
                            g_CSLoading = true;
                    }

                }
                

}
objcomSlider1480221 = new comSlider1480221();
objcomSlider1480221.include('comslider1480221/js/helpers.js', false);
objcomSlider1480221.include('comslider1480221/js/cmswebfont.js', false);
objcomSlider1480221.include('comslider1480221/js/jquery-1.10.1.js', false);
objcomSlider1480221.include('comslider1480221/js/jquery-ui-1.10.3.effects.js', true);

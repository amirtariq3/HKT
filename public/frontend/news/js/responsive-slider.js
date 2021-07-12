// Generated by CoffeeScript 1.6.1

/*!
  # Responsive Slider widget script
  # by w3widgets
  #
  # Author: Lukasz Kokoszkiewicz
  #
  # Copyright © w3widgets 2013 All Rights Reserved
*/


(function() {

  (function($) {
    var Slider, autoplay, interval, opts, parallax, parallaxDirection, parallaxDistance, spy, touch, transitionTime;
    Slider = function(element, options) {
      this.$element = element;
      this.$slides = this.$element.find('.slides ul li');
      if (this.$slides.length < 1) {
        this.$slides = this.$element.find('[data-group="slides"] ul li');
      }
      this.$prevNext = this.$element.find('[data-jump]');
      this.$pages = this.$element.find('[data-jump-to]');
      this.$slidesContainer = this.$element.find('[data-group="slides"]');
      this.$rel = this.$element.find('[data-group="slides"] ul');
      this.$rel.css('position', 'relative');
      this.slideChangeInProgress = false;
      this.interval = false;
      this.options = options;
      this.current = 2;
      this.slide = 1;
      this.set(2, true);
      this.options.onInit.call(this);
      this.runAnimations();
      return null;
    };
    Slider.prototype = {
      getGlobalWidth: function() {
        return this.$element.width();
      },
      updateControls: function() {
        this.$pages.removeClass('active');
        return this.$pages.filter('[data-jump-to=' + (this.current - 1) + ']').addClass('active');
      },
      runAnimations: function() {
        var captions, r;
        r = this;
        captions = $(this.$slides[this.current - 1]).find('[data-animate]');
        return captions.each(function() {
          var $caption;
          $caption = $(this);
          return r.options.animations[$caption.data('animate')]($caption, $caption.data('delay'), $caption.data('length'));
        });
      },
      hideAnimatedCaptions: function(slide) {
        return $(this.$slides[slide - 1]).find('[data-animate]').css({
          'opacity': 0
        });
      },
      calculateScroll: function(slide) {
        var gWidth;
        gWidth = this.getGlobalWidth();
        return (slide - 1) * gWidth;
      },
      resize: function() {
        return this.$rel.css('right', this.calculateScroll(this.current));
      },
      jump: function(slide, transitionTime, noanimation) {
        var animateOptions, gWidth, r, step;
        if (transitionTime == null) {
          transitionTime = this.options.transitionTime;
        }
        if (noanimation == null) {
          noanimation = false;
        }
        r = this;
        if (slide === r.current) {
          noanimation = true;
        }
        if (this.$slides.length >= slide && !this.slideChangeInProgress) {
          gWidth = this.getGlobalWidth();
          if (!noanimation) {
            this.hideAnimatedCaptions(slide);
          }
          step = void 0;
          if (this.options.parallax) {
            this.currentBgPosition = parseInt(r.$slidesContainer.css('background-position'));
            this.moveStartScroll = parseInt(this.$rel.css('right'), 10);
            step = function() {
              var position;
              position = Math.round(r.currentBgPosition - (r.moveStartScroll - parseInt(r.$rel.css('right'), 10)) * r.options.parallaxDistance * r.options.parallaxDirection) + 'px 0';
              return r.$slidesContainer.css('background-position', position);
            };
          }
          animateOptions = {
            duration: transitionTime,
            step: step,
            done: function() {
              if (slide === 1) {
                r.hideAnimatedCaptions(r.$slides.length - 1);
                r.set(r.$slides.length - 1);
              } else if (slide === r.$slides.length) {
                r.hideAnimatedCaptions(2);
                r.set(2);
              } else {
                r.current = slide;
                r.slide = slide - 1;
              }
              r.updateControls();
              if (!noanimation) {
                r.runAnimations();
              }
              r.options.onSlideChange.call(r);
              return null;
            },
            always: function() {
              r.slideChangeInProgress = false;
              return null;
            }
          };
          this.slideChangeInProgress = true;
          this.$rel.animate({
            'right': this.calculateScroll(slide)
          }, animateOptions);
        }
        return null;
      },
      set: function(slide, init) {
        var gWidth;
        if (init == null) {
          init = false;
        }
        gWidth = this.getGlobalWidth();
        this.$rel.css('right', this.calculateScroll(slide));
        this.current = slide;
        this.slide = slide - 1;
        this.updateControls();
        return null;
      },
      movestart: function(e) {
        if ((e.distX > e.distY && e.distX < -e.distY) || (e.distX < e.distY && e.distX > -e.distY)) {
          return e.preventDefault();
        } else {
          this.stop();
          if (this.options.parallax) {
            this.currentBgPosition = parseInt(this.$slidesContainer.css('background-position'));
          }
          this.hideAnimatedCaptions(this.current - 1);
          this.hideAnimatedCaptions(this.current + 1);
          this.moveStartScroll = parseInt(this.$rel.css('right'), 10);
          this.$rel.stop();
          this.$rel.addClass('drag');
          return this.timeStart = new Date();
        }
      },
      move: function(e) {
        var position;
        if (this.options.parallax) {
          position = Math.round(this.currentBgPosition - e.distX * this.options.parallaxDistance * this.options.parallaxDirection) + 'px 0';
          this.$slidesContainer.css('background-position', position);
        }
        return this.$rel.css('right', this.moveStartScroll - e.distX);
      },
      moveend: function(e) {
        var absDist, distLeftFrac, gWidth, timeDelta, transitionTime;
        absDist = Math.abs(e.distX);
        timeDelta = (new Date()).getTime() - this.timeStart.getTime();
        gWidth = this.getGlobalWidth();
        distLeftFrac = absDist / gWidth;
        transitionTime = (timeDelta / distLeftFrac) * (1 - distLeftFrac);
        transitionTime = transitionTime < 1000 ? transitionTime : 1000;
        this.$rel.removeClass('drag');
        if (absDist < gWidth / this.options.moveDistanceToSlideChange) {
          return this.jump(this.current, transitionTime, true);
        } else {
          if (e.distX < 0) {
            return this.next(transitionTime);
          } else {
            return this.prev(transitionTime);
          }
        }
      },
      stop: function(permanent) {
        if (permanent == null) {
          permanent = true;
        }
        clearInterval(this.interval);
        if (permanent) {
          this.$element.off('mouseover');
          this.$element.off('mouseleave');
        }
        return null;
      },
      start: function() {
        var r;
        r = this;
        return this.interval = setInterval((function() {
          return r.next();
        }), this.options.interval);
      },
      autoplay: function() {
        var r;
        r = this;
        this.stop();
        this.start();
        this.$element.on('mouseover', function() {
          return r.stop(false);
        });
        return this.$element.on('mouseleave', function() {
          r.stop(false);
          return r.start();
        });
      },
      prev: function(transitionTime, noanimation) {
        if (transitionTime == null) {
          transitionTime = this.options.transitionTime;
        }
        if (noanimation == null) {
          noanimation = false;
        }
        this.jump(this.current - 1, transitionTime, noanimation);
        this.options.onSlidePrev.call(this);
        return this.options.onSlidePageChange.call(this);
      },
      next: function(transitionTime, noanimation) {
        if (transitionTime == null) {
          transitionTime = this.options.transitionTime;
        }
        if (noanimation == null) {
          noanimation = false;
        }
        this.jump(this.current + 1, transitionTime, noanimation);
        this.options.onSlideNext.call(this);
        return this.options.onSlidePageChange.call(this);
      }
    };
    $.fn.responsiveSlider = function(option) {
      var init, options, publicFunc, r, run;
      r = this;
      options = $.extend({}, $.fn.responsiveSlider.defaults, typeof option === 'object' && option);
      options.animations = $.fn.responsiveSlider.animations;
      publicFunc = {
        next: 'next',
        prev: 'prev',
        stop: 'stop',
        start: 'autoplay'
      };
      init = function($this) {
        var $firstSlide, $lastSlide, data, slides;
        options = $.metadata ? $.extend({}, options, $this.metadata()) : options;
        slides = $this.find('ul li');
        if (slides.length > 1) {
          $firstSlide = $(slides[0]);
          $lastSlide = $(slides[slides.length - 1]);
          $firstSlide.before($lastSlide.clone());
          $lastSlide.after($firstSlide.clone());
        }
        $this.data('slider', (data = new Slider($this, options)));
        if (options.autoplay) {
          data.interval = setInterval((function() {
            return data.next();
          }), options.interval);
          data.autoplay();
        }
        $(window).on('resize', function() {
          return data.resize();
        });
        $this.find('[data-jump]').on('click', function() {
          data[$(this).data('jump')]();
          return false;
        });
        $this.find('[data-jump-to]').on('click', function() {
          data.jump($(this).data('jump-to') + 1);
          return false;
        });
        if (options.touch) {
          return $this.find('[data-group="slide"]').on('movestart', function(e, $this) {
            return data.movestart(e);
          }).on('move', function(e) {
            return data.move(e);
          }).on('moveend', function(e) {
            return data.moveend(e);
          });
        }
      };
      run = function() {
        return r.each(function() {
          var $this, data;
          $this = $(this);
          data = $this.data('slider');
          if (!data) {
            init($this, options);
          } else if (typeof option === 'string') {
            data[publicFunc[option]]();
          } else if (typeof option === 'number') {
            data.jump(Math.abs(option) + 1);
          }
          return $this;
        });
      };
      if ($.fn.responsiveSlider.run) {
        return run();
      } else {
        $(window).on('load', run);
        return $.fn.responsiveSlider.run = true;
      }
    };
    $.fn.responsiveSlider.animations = {
      slideAppearRightToLeft: function($caption, delay, length) {
        var animate, css;
        if (delay == null) {
          delay = 0;
        }
        if (length == null) {
          length = 1500;
        }
        css = {
          'margin-left': 1000,
          'margin-right': -1000
        };
        $caption.css(css);
        animate = function() {
          css = {
            'margin-left': 0,
            'margin-right': 0,
            'opacity': 1
          };
          return $caption.animate(css, length);
        };
        if (delay > 0) {
          return setTimeout(animate, delay);
        } else {
          return animate();
        }
      },
      slideAppearLeftToRight: function($caption, delay, length) {
        var animate, css;
        if (delay == null) {
          delay = 0;
        }
        if (length == null) {
          length = 800;
        }
        css = {
          'margin-left': -1000,
          'margin-right': 1000
        };
        $caption.css(css);
        animate = function() {
          css = {
            'margin-left': 0,
            'margin-right': 0,
            'opacity': 1
          };
          return $caption.animate(css, length);
        };
        if (delay > 0) {
          return setTimeout(animate, delay);
        } else {
          return animate();
        }
      },
      slideAppearUpToDown: function($caption, delay, length) {
        var animate, css;
        if (delay == null) {
          delay = 0;
        }
        if (length == null) {
          length = 300;
        }
        css = {
          'margin-top': 100,
          'margin-bottom': -100
        };
        $caption.css(css);
        animate = function() {
          css = {
            'margin-top': 0,
            'margin-bottom': 0,
            'opacity': 1
          };
          return $caption.animate(css, length);
        };
        if (delay > 0) {
          return setTimeout(animate, delay);
        } else {
          return animate();
        }
      },
      slideAppearDownToUp: function($caption, delay, length) {
        var animate, css;
        if (delay == null) {
          delay = 0;
        }
        if (length == null) {
          length = 2000;
        }
        css = {
          'margin-top': -1000,
          'margin-bottom': 1000
        };
        $caption.css(css);
        animate = function() {
          css = {
            'margin-top': 0,
            'margin-bottom': 0,
            'opacity': 1
          };
          return $caption.animate(css, length);
        };
        if (delay > 0) {
          return setTimeout(animate, delay);
        } else {
          return animate();
        }
      }
    };
    $.fn.responsiveSlider.defaults = {
      autoplay: false,
      interval: 5000,
      touch: true,
      parallax: false,
      parallaxDistance: 1 / 10,
      parallaxDirection: 1,
      transitionTime: 300,
      moveDistanceToSlideChange: 4,
      onSlideChange: function() {},
      onSlideNext: function() {},
      onSlidePrev: function() {},
      onSlidePageChange: function() {},
      onInit: function() {}
    };
    $.fn.responsiveSlider.run = false;
    spy = $('[data-spy="responsive-slider"]');
    if (spy.length) {
      opts = {};
      if (autoplay = spy.data('autoplay')) {
        opts.autoplay = autoplay;
      }
      if (interval = spy.data('interval')) {
        opts.interval = interval;
      }
      if (parallax = spy.data('parallax')) {
        opts.parallax = parallax;
      }
      if (parallaxDistance = spy.data('parallax-distance')) {
        opts.parallaxDistance = parseInt(parallaxDistance, 10);
      }
      if (parallaxDirection = spy.data('parallax-direction')) {
        opts.parallaxDirection = parseInt(parallaxDirection, 10);
      }
      if (!(touch = spy.data('touch'))) {
        opts.touch = touch;
      }
      if (transitionTime = spy.data('transitiontime')) {
        opts.transitionTime = transitionTime;
      }
      spy.responsiveSlider(opts);
    }
    return null;
  })(jQuery);

}).call(this);

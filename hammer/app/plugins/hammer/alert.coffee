##
# Hammer Alert
#
# Used by the Hammer UI
#
# Give the possibility to close an alert.
#
# Options :
# transition - Do you want a fadeOut transition or not ?
# duration - Duration of a transition
##

$.hammerAlert = (options) ->

  options = $.extend({}, $.hammerAlert.options, options)

  $('[data-toggle=alert-close]').each ->

    $(this).find('span').on 'click', ->

      if options.transition is true
        $(this).parent().fadeOut options.duration, ->

          $(this).remove()

      else
        $(this).parent().remove()


$.hammerAlert.options =
  transition: false
  duration: 500

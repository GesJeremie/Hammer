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

$.fn.hammerAlert = (options) ->

  # Default settings
  settings =
    transition: false
    duration: 500

  this.each ->

    options = $.extend(settings, options)

    transition = $(this).attr('data-transition')

    ###
    # Manage settings from data-attributes
    if (typeof transition
      options.transition = $(this).data('transition')

    if $(this).hasAttr('data-transition-duration')
      options.duration = $(this).data('transition-duration')
    ###

    $(this).find('span').on 'click', ->

      if options.transition is true
        $(this).parent().fadeOut options.duration, ->

          $(this).remove()

      else
        $(this).parent().remove()

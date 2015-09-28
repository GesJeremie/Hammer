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

  this.each ->

    # Apply to all span found
    $(this).find('span').on 'click', ->

        $(this).parent().remove()

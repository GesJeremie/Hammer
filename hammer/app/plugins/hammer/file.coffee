##
# Hammer File
#
# Used by the Hammer UI
#
# Prettify the input file HTML
#
##

$.hammerFile = ->

  # The base template created before the <input type="submit" />
  baseTemplate = """
    <div class="hammer-file-container"><a id="{id}" class="{class}">{label}</a></div>
  """

  # Loop all the input file
  $('input[type=file]').each (index) ->

    # We set an unique id
    $(this).attr('id', 'hammer-file-target-' + index)

    ##
    # Build the template with the class and the label given via the
    # data-* attributes
    ##
    klass = $(this).attr('data-class')
    label = $(this).attr('data-label')

    template = baseTemplate

    if klass != undefined and klass.length > 0

      template = template.split('{class}').join(klass)

    else

      template = template.split('{class}').join('button')

    if label != undefined and label.length > 0

      template = template.split('{label}').join(label)

    else

      template = template.split('{label}').join('Choose File')


    template = template.split('{id}').join('hammer-file-toggle-' + index)

    # Inject in the html the template created
    $(this).before(template)

    # Hide the input file
    $(this).css('display', 'none')

  ##
  # When we click
  ##
  $('[id^=hammer-file-toggle]').on 'click', ->

    # We fetch the right target
    target = $(this).attr('id').split('toggle').join('target')
    $('#' + target).click()

  ##
  # When the input file change
  ##
  $('[id^=hammer-file-target]').on 'change', ->

    # Get the value (something like C:\\fakepatch\name-of-a-file)
    value = $(this).val()

    # If we have a real value (The user didn't cancel)
    if value.length > 0

      # Rip the uglyness
      value = value.replace("C:\\fakepath\\", '')

      # Target the right thing
      toggle = $(this).attr('id').split('target').join('toggle')

      # Inject the value
      $('#' + toggle).html(value)

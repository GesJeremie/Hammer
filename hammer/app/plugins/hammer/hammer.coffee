##
# Alert
##
require 'plugins/hammer/alert'

$('.alert.\--with-close').hammerAlert()

##
# File
##
require 'plugins/hammer/file'

$.hammerFile()

##
# Checkboxes
##
$(":checkbox, :radio").labelauty
  class: 'hammer-checkboxes'

##
# Tooltip
##
$('[data-toggle=tooltip]').tooltipster()

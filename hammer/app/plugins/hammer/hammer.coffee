##
# Alert
##
require 'plugins/hammer/alert'

$('.alert.\--with-close').hammerAlert
  transition: true
  duration: 500

##
# File
##
require 'plugins/hammer/file'

$.hammerFile()

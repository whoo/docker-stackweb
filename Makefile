SUBDIRS=  dockweb-nginx  dockweb-php-fpm

.PHONY: subdirs $(SUBDIRS)

subdirs: $(SUBDIRS)

$(SUBDIRS):
	$(MAKE) -C $(@)

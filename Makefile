VERSION=`cat VERSION`

version:
	@echo "Zeebe client version:" $(VERSION)

build-client:
	docker build -f build/Dockerfile . -t zeebe-client-builder
	docker run --rm -w /zeebe/build -v ${PWD}:/zeebe zeebe-client-builder sh gen.sh $(VERSION)

tag:
	git tag -a v$(VERSION) -m "Zeebe client version: $(VERSION)"

push-release:
	git push origin v$(VERSION)

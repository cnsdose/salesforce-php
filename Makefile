PHPUNIT=./vendor/bin/phpunit
SONAR_ARGS=`cat .sonar`
GROUP=default

report_xml:
	$(PHPUNIT) --group $(GROUP) --log-junit 'tests/report/phpunit.xml' --coverage-clover 'tests/report/phpunit.coverage.xml'

report_html:
	$(PHPUNIT) --group $(GROUP) --coverage-html 'tests/report'

sonar: report_xml
	sonar-scanner ${SONAR_ARGS} \
      -Dsonar.sources='src/' \
      -Dsonar.exclusions='src/Models/Metadata/**,src/Models/Records/**' \
      -Dsonar.tests='tests/' \
      -Dsonar.test.exclusions='tests/report/**,tests/Models/**' \
      -Dsonar.coverage.exclusions='config/**,examples/**,src/Console/**,src/Models/Metadata/**,src/Models/Records/**,src/Providers/**' \
      -Dsonar.php.tests.reportPath='tests/report/phpunit.xml' \
      -Dsonar.php.coverage.reportPaths='tests/report/phpunit.coverage.xml'

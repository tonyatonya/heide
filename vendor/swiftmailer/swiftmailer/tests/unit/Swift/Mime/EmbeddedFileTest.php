<?php

class Swift_Mime_EmbeddedFileTest extends Swift_Mime_AttachmentTest
{
    public function testNestingLevelIsAttachment()
    {
        //Overridden
    }

    public function testNestingLevelIsEmbedded()
    {
        $file = $this->_createEmbeddedFile($this->_createHeaderSet(),
            $this->_createEncoder(), $this->_createCache()
            );
        $this->assertEquals(
            Swift_Mime_MimeEntity::LEVEL_RELATED, $file->getNestingLevel()
            );
    }

    public function testIdIsAutoGenerated()
    {
        $headers = $this->_createHeaderSet(array(), false);
        $headers->shouldReceive('addIdHeader')
                ->once()
                ->with('Content-ID', '/^.*?@.*?$/D');

        $file = $this->_createEmbeddedFile($headers, $this->_createEncoder(),
            $this->_createCache()
            );
    }

    public function testDefaultDispositionIsInline()
    {
        $headers = $this->_createHeaderSet(array(), false);
        $headers->shouldReceive('addParameterizedHeader')
                ->once()
                ->with('Content-Disposition', 'inline');
        $headers->shouldReceive('addParameterizedHeader')
                ->zeroOrMoreTimes();

        $file = $this->_createEmbeddedFile($headers, $this->_createEncoder(),
            $this->_createCache()
            );
    }

    // -- Private helpers

    protected function _createAttachment($headers, $encoder, $cache, $mimeTypes = array())
    {
        return $this->_createEmbeddedFile($headers, $encoder, $cache, $mimeTypes);
    }

    private function _createEmbeddedFile($headers, $encoder, $cache)
    {
        return new Swift_Mime_EmbeddedFile($headers, $encoder, $cache, new Swift_Mime_Grammar());
    }
}

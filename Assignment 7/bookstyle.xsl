<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html xmlns = "http://www.w3.org/1999/xhtml">
            <head>
                <meta charset="utf-8"/>
                <link rel="stylesheet" type="text/css" href ="books.css"/>
                <title>Bookstore</title>
            </head>
            <body>
                <h1> Bookstore </h1>
                <table border="1">
                    <tr id="header">
                        <th> TITLE</th>
                        <th> AUTHOR</th>
                        <th> ISBN </th>
                        <th> PUBLISHER</th>
                        <th> EDITION </th>
                        <th> PRICE </th>
                    </tr>
                <xsl:for-each select="bookstore/book">
                    <tr>
                        <td><xsl:value-of select="title"/></td>
                        <td id="author"><xsl:value-of select="author"/></td>
                        <td id="non-author"><xsl:value-of select="ISBN"/></td>
                        <td id="non-author"><xsl:value-of select="publisher"/></td>
                        <td id="non-author"><xsl:value-of select="edition"/></td>
                        <td id="non-author"><xsl:value-of select="price"/></td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>

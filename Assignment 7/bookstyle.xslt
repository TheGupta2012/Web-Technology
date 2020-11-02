<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <body style="background-color:rgba(200,0,10,0.3)">
                <h1> Bookstore </h1>
                <table border="1">
                    <tr bgcolor="grey">
                        <th> S.No</th>
                        <th> TITLE</th>
                        <th> AUTHOR</th>
                        <th> ISBN </th>
                        <th> PUBLISHER</th>
                        <th> EDITION </th>
                        <th> PRICE </th>
                    </tr>
                <xsl:for-each select="bookstore/book">
                    <tr>
                        <td><xsl:value-of select="title"></td>
                        <td bgcolor="yellow" ><xsl:text><strong><xsl:value-of select="author"/></strong></xsl:text></td>
                        <td bgcolor="green"><xsl:value-of select="ISBN"/></td>
                        <td bgcolor="green"><xsl:value-of select="publisher"/></td>
                        <td bgcolor="green"><xsl:value-of select="edition"/></td>
                        <td bgcolor="green"><xsl:value-of select="price"/></td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>

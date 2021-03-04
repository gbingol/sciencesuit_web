function matrixtotable(arr)
{
      document.write("<table>")

      for(let i=0; i<arr.length; ++i)
      {
            document.write("<tr>")

            for(let j=0; j<arr[i].length; ++j)
                  document.write("<td style=\"padding: 6px\">"+ arr[i][j] +"</td>" );


            document.write("</tr>");
      }

      document.write("</table>");
}
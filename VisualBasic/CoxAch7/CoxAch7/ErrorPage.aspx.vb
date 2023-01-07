'Aden cox
'handles try catch error
Option Strict On
Option Explicit On

Partial Class ErrorPage
    Inherits System.Web.UI.Page

    Private Sub return_Click(sender As Object, e As EventArgs) Handles [btnReturn].Click
        Response.Redirect("Default.aspx")
    End Sub
End Class

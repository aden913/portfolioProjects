'Aden cox
'Account creation and success page display
Option Strict On
Option Explicit On
Partial Class Congratulations
    Inherits System.Web.UI.Page

    Protected Sub Page_Load(sender As Object, e As EventArgs) Handles Me.Load
        UnobtrusiveValidationMode = System.Web.UI.UnobtrusiveValidationMode.None
    End Sub
    Public Sub btnReturn_Click(sender As Object, e As EventArgs) Handles btnReturn.Click
        Response.Redirect("Default.aspx")
    End Sub
End Class

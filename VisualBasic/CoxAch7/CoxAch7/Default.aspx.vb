'Aden cox
'Account creation and success page display
Option Strict On
Option Explicit On
Partial Class _Default
    Inherits System.Web.UI.Page

    Protected Sub Page_Load(sender As Object, e As EventArgs) Handles Me.Load
        UnobtrusiveValidationMode = System.Web.UI.UnobtrusiveValidationMode.None
    End Sub


    Protected Sub btnSubmit_Click(sender As Object, e As EventArgs) Handles btnSubmit.Click
        If Page.IsValid Then
            Response.Redirect("Congratulations.aspx")
        End If
    End Sub
    Protected Sub CheckUserID(ByVal i As Object, ByVal args As ServerValidateEventArgs)
        Try
            If txtUserID.Text.Count() >= 5 Then
                args.IsValid = True
            Else
                args.IsValid = False
            End If
        Catch ex As Exception
            Response.Redirect("ErrorPage.aspx", False)
        End Try


    End Sub
    Protected Sub btnCancel_Click(sender As Object, e As EventArgs) Handles btnCancel.Click
        txtConfirmPassword.Text = ""
        txtDateOfBirth.Text = ""
        txtFirstName.Text = ""
        txtLastName.Text = ""
        txtPassword.Text = ""
        txtUserID.Text = ""
    End Sub
End Class

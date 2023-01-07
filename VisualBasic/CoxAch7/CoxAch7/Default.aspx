<%@ Page Language="VB" AutoEventWireup="True" CodeFile="Default.aspx.vb" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Create an Account</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <h1>Create Your Account!</h1>

            <asp:Label ID="lblLastName" runat="server" Text="Last Name:" AssociatedControlID ="txtLastName"></asp:Label>
            <asp:TextBox ID="txtLastName"  runat="server"></asp:TextBox>
            <asp:RequiredFieldValidator ID="LastNameRequired"
                runat="server"
                ControlToValidate="txtLastName"
                Display="None"
                ErrorMessage="Please enter a value for Last Name*" 
                SetFocusOnError ="True" >
            </asp:RequiredFieldValidator>         
            <asp:CompareValidator ID="LastNameStringCheck"
	            runat="server"
	            Operator="DataTypeCheck"
	            Type="String"
	            ControlToValidate="txtLastName"
            	ErrorMessage="You must enter the Last Name in a valid format!"
            	SetFocusOnError="True"
            	Display="None"
            ></asp:CompareValidator>
            
            <asp:Label ID="lblFirstName" runat="server" Text="First Name:" AssociatedControlID ="txtFirstName"></asp:Label>
            <asp:TextBox ID="txtFirstName"  runat="server"></asp:TextBox>
            <asp:RequiredFieldValidator ID="FirstNameRequired"
                runat="server"
                ControlToValidate="txtFirstName"
                Display="None"
                ErrorMessage="Please enter a value for First Name*" 
                SetFocusOnError ="True"
                 Visible="True"></asp:RequiredFieldValidator>
            <asp:CompareValidator ID="FirstNameStringCheck"
            	runat="server"
            	Operator="DataTypeCheck"
            	Type="String"
            	ControlToValidate="txtFirstName"
            	ErrorMessage="You must enter the First Name in a valid format!"
            	SetFocusOnError="True"
            	Display="None"
            ></asp:CompareValidator>            
            <asp:Label ID="lblDateOfBirth" runat="server" Text="Date of Birth:" AssociatedControlID ="txtDateOfBirth"></asp:Label>
            <asp:TextBox ID="txtDateOfBirth"  runat="server"></asp:TextBox>
            <asp:RequiredFieldValidator ID="DateOfBirthRequired"
                runat="server"
                ControlToValidate="txtDateOfBirth"
                Display="None"
                ErrorMessage="Please enter a value for Date of Birth*" 
                SetFocusOnError ="True" Visible="True"></asp:RequiredFieldValidator>
            <asp:CompareValidator ID="DOBDateCheck"
            	runat="server"
            	Operator="DataTypeCheck"
            	Type="Date"
            	ControlToValidate="txtDateOfBirth"
            	ErrorMessage="You must enter the Date in a valid format!"
            	SetFocusOnError="True"
            	Display="None"
            ></asp:CompareValidator>
            <asp:RangeValidator ID="DOBRangeCheck"
                runat="server"
                ControlToValidate="txtDateOfBirth"
                MaximumValue="12/31/1995"
                MinimumValue="01/01/1955"
                Type="Date"
                SetFocusOnError="true"
                Display="None"
                ErrorMessage="You do not meet the age requirements(01/01/1995 - 12/31/1995)">
            </asp:RangeValidator>            
            <asp:Label ID="lblUserID" runat="server" Text="User ID:" AssociatedControlID ="txtUserID"></asp:Label>
            <asp:TextBox ID="txtUserID"  runat="server"></asp:TextBox>
            <asp:RequiredFieldValidator ID="UserIDRequired"
                runat="server"
                ControlToValidate="txtUserID"
                Display="None"
                ErrorMessage="Please enter a value for User ID*" 
                SetFocusOnError ="True" Visible="True"></asp:RequiredFieldValidator>
            <asp:CustomValidator ID="UserIDCustom"
                runat="server"
                FocusOnError="True"
                Display="None"
                OnServerValidate="CheckUserID"
                ErrorMessage="Id must be at least 5 characters">
            </asp:CustomValidator>
            
            <asp:Label ID="lblPassword" runat="server" Text="Password:" AssociatedControlID ="txtPassword"></asp:Label>
            <asp:TextBox ID="txtPassword"  runat="server"></asp:TextBox>
            <asp:RequiredFieldValidator ID="PasswordRequired"
                runat="server"
                ControlToValidate="txtPassword"
                Display="None"
                ErrorMessage="Please enter a value for Password*" 
                SetFocusOnError ="True" Visible="True"></asp:RequiredFieldValidator>
            <asp:RegularExpressionValidator
                    ID="PasswordRegEx"
                    runat="server"
                    ControlToValidate="txtPassword"
                    ErrorMessage="Password must start with 2 upper case letters followed by any 1 of 3 symbols (-, *, =) followed by any 4 numbers that are between 2 and 8"
                    SetFocusOnError="true"
                    Display="None"
                    ValidationExpression="[A-Z]{2}[-*=][2-8]{4}"></asp:RegularExpressionValidator>
            
            <asp:Label ID="lblConfirmPassword" runat="server" Text="Confirm Password:" AssociatedControlID ="txtConfirmPassword"></asp:Label>
            <asp:TextBox ID="txtConfirmPassword"  runat="server"></asp:TextBox>
            <asp:RequiredFieldValidator ID="ConfirmPasswordRequired"
                runat="server"
                ControlToValidate="txtConfirmPassword"
                Display="None"
                ErrorMessage="Please enter a value for Confirm Password*" 
                SetFocusOnError ="True" Visible="True"></asp:RequiredFieldValidator>
            <asp:CompareValidator ID="passwordCompare"
                runat="server"
                ErrorMessage="Your Passwords do not match"
                ControlToCompare="txtPassword"
	            ControlToValidate="txtConfirmPassword"
                SetFocusOnError="True"
                Display="None"
                ></asp:CompareValidator>
            
            <asp:ValidationSummary ID="ValidationSummary1" runat="server" ShowMessageBox="False" />                   
            <asp:Button ID="btnSubmit" runat="server" Text="Create Account" />    
            <asp:Button ID="btnCancel" runat="server" Text="Cancel" CausesValidation="False" />            
        </div>
    </form>
</body>
</html>
